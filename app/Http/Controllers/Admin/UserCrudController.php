<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CreateSection;
use App\Enums\CrudListIcon;
use App\Http\Requests\UserStoreCrudRequest;
use App\Http\Requests\UserUpdateCrudRequest;
use App\Services\UserService;
use App\Traits\HasCreateSections;
use App\Traits\HasCrudListFilters;
use App\Traits\HasCrudRoutePermissions;
use App\Traits\HasCrudUiPermissions;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
// use Backpack\PermissionManager\app\Http\Requests\UserStoreCrudRequest as StoreRequest;
// use Backpack\PermissionManager\app\Http\Requests\UserUpdateCrudRequest as UpdateRequest;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\RedirectResponse;

class UserCrudController extends CrudController
{
    use CreateOperation { store as traitStore; }
    use DeleteOperation;
    use HasCreateSections;
    use HasCrudListFilters;
    use HasCrudRoutePermissions;
    use HasCrudUiPermissions;
    use ListOperation;
    use ShowOperation;
    use UpdateOperation { update as traitUpdate; }

    public function __construct()
    {
        parent::__construct();

        $this->applyCrudRoutePermissions('users');
    }

    public function setup()
    {
        $this->crud->setModel(config('backpack.permissionmanager.models.user'));
        $this->crud->setEntityNameStrings(trans('backpack::permissionmanager.user'), trans('backpack::permissionmanager.users'));
        $this->crud->setRoute(backpack_url('user'));

        CRUD::setCreateView('admin.users.form');
        CRUD::setEditView('admin.users.form');

        $this->applyUserVisibilityScope();
        $this->applyCrudUiPermissions('users');
    }

    public function setupListOperation()
    {
        $this->crud->set('list.icon', CrudListIcon::Users->value);
        $this->setupUserListFilters();

        $this->crud->addColumns([
            [
                'name' => 'name',
                'label' => trans('backpack::permissionmanager.name'),
                'type' => 'text',
            ],
            [
                'name' => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type' => 'email',
            ],
            [ // n-n relationship (with pivot table)
                'label' => trans('backpack::permissionmanager.roles'), // Table column heading
                'type' => 'closure',
                'name' => 'roles', // the method that defines the relationship in your Model
                'function' => function ($entry) {
                    return $entry->roles
                        ->map(function ($role) {
                            $label = e($role->display_name ?: $role->name);

                            return '<span class="badge bg-primary-subtle text-primary border border-primary-subtle d-inline-flex align-items-center gap-1 px-2 py-1"><i class="la la-users"></i>'.$label.'</span>';
                        })
                        ->implode(' ');
                },
                'escaped' => false,
            ],
        ]);

        if (backpack_pro()) {
            // Role Filter
            $this->crud->addFilter(
                [
                    'name' => 'role',
                    'type' => 'dropdown',
                    'label' => trans('backpack::permissionmanager.role'),
                ],
                config('permission.models.role')::all()->pluck('name', 'id')->toArray(),
                function ($value) { // if the filter is active
                    $this->crud->addClause('whereHas', 'roles', function ($query) use ($value) {
                        $query->where('role_id', '=', $value);
                    });
                }
            );

            // Extra Permission Filter
            $this->crud->addFilter(
                [
                    'name' => 'permissions',
                    'type' => 'select2',
                    'label' => trans('backpack::permissionmanager.extra_permissions'),
                ],
                config('permission.models.permission')::all()->pluck('name', 'id')->toArray(),
                function ($value) { // if the filter is active
                    $this->crud->addClause('whereHas', 'permissions', function ($query) use ($value) {
                        $query->where('permission_id', '=', $value);
                    });
                }
            );
        }

        $this->applyCrudListFilters();
    }

    public function setupCreateOperation()
    {
        $this->addUserFields();
        $this->prepareCreateSections();
        $this->setupUserFormData();
        $this->crud->setValidation(UserStoreCrudRequest::class);
    }

    public function setupUpdateOperation()
    {
        $this->addUserFields();
        $this->prepareCreateSections();
        $this->setupUserFormData();
        $this->crud->setValidation(UserUpdateCrudRequest::class);
    }

    public function setupShowOperation()
    {
        // automatically add the columns
        $this->crud->column('name');
        $this->crud->column('email');
        $this->crud->column([
            // two interconnected entities
            'label' => trans('backpack::permissionmanager.user_role_permission'),
            'field_unique_name' => 'user_role_permission',
            'type' => 'checklist_dependency',
            'name' => 'roles_permissions',
            'subfields' => [
                'primary' => [
                    'label' => trans('backpack::permissionmanager.role'),
                    'name' => 'roles', // the method that defines the relationship in your Model
                    'entity' => 'roles', // the method that defines the relationship in your Model
                    'entity_secondary' => 'permissions', // the method that defines the relationship in your Model
                    'attribute' => 'name', // foreign key attribute that is shown to user
                    'model' => config('permission.models.role'), // foreign key model
                ],
                'secondary' => [
                    'label' => mb_ucfirst(trans('backpack::permissionmanager.permission_singular')),
                    'name' => 'permissions', // the method that defines the relationship in your Model
                    'entity' => 'permissions', // the method that defines the relationship in your Model
                    'entity_primary' => 'roles', // the method that defines the relationship in your Model
                    'attribute' => 'name', // foreign key attribute that is shown to user
                    'model' => config('permission.models.permission'), // foreign key model,
                ],
            ],
        ]);
        $this->crud->column('created_at');
        $this->crud->column('updated_at');
    }

    /**
     * Store a newly created resource in the database.
     *
     * @return RedirectResponse
     */
    public function store()
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->setRequest($this->userService()->prepareRequestForSave($this->crud->getRequest()));
        $this->crud->unsetValidation(); // validation has already been run

        $response = $this->traitStore();
        $this->userService()->syncRolesAndPermissions(
            $this->crud->entry,
            (array) $this->crud->getRequest()->input('roles', []),
            (array) $this->crud->getRequest()->input('permissions', [])
        );

        return $response;
    }

    /**
     * Update the specified resource in the database.
     *
     * @return RedirectResponse
     */
    public function update()
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->setRequest($this->userService()->prepareRequestForSave($this->crud->getRequest()));
        $this->crud->unsetValidation(); // validation has already been run

        $response = $this->traitUpdate();
        $this->userService()->syncRolesAndPermissions(
            $this->crud->entry,
            (array) $this->crud->getRequest()->input('roles', []),
            (array) $this->crud->getRequest()->input('permissions', [])
        );

        return $response;
    }

    protected function addUserFields()
    {
        $this->crud->addFields([
            [
                'name' => 'name',
                'label' => trans('backpack::permissionmanager.name'),
                'type' => 'text',
                'section' => CreateSection::Main->value,
            ],
            [
                'name' => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type' => 'email',
                'section' => CreateSection::Main->value,
            ],
            [
                'name' => 'password',
                'label' => trans('backpack::permissionmanager.password'),
                'type' => 'password',
                'section' => CreateSection::Main->value,
            ],
            [
                'name' => 'password_confirmation',
                'label' => trans('backpack::permissionmanager.password_confirmation'),
                'type' => 'password',
                'section' => CreateSection::Main->value,
            ],
            // [
            //     // two interconnected entities
            //     'label' => trans('backpack::permissionmanager.user_role_permission'),
            //     'field_unique_name' => 'user_role_permission',
            //     'type' => 'checklist_dependency',
            //     'section' => CreateSection::Custom->value,
            //     'name' => 'roles,permissions',
            //     'subfields' => [
            //         'primary' => [
            //             'label' => trans('backpack::permissionmanager.roles'),
            //             'name' => 'roles', // the method that defines the relationship in your Model
            //             'entity' => 'roles', // the method that defines the relationship in your Model
            //             'entity_secondary' => 'permissions', // the method that defines the relationship in your Model
            //             'attribute' => 'name', // foreign key attribute that is shown to user
            //             'model' => config('permission.models.role'), // foreign key model
            //             'pivot' => true, // on create&update, do you need to add/delete pivot table entries?]
            //             'number_columns' => 3, // can be 1,2,3,4,6
            //         ],
            //         'secondary' => [
            //             'label' => mb_ucfirst(trans('backpack::permissionmanager.permission_plural')),
            //             'name' => 'permissions', // the method that defines the relationship in your Model
            //             'entity' => 'permissions', // the method that defines the relationship in your Model
            //             'entity_primary' => 'roles', // the method that defines the relationship in your Model
            //             'attribute' => 'name', // foreign key attribute that is shown to user
            //             'model' => config('permission.models.permission'), // foreign key model
            //             'pivot' => true, // on create&update, do you need to add/delete pivot table entries?]
            //             'number_columns' => 3, // can be 1,2,3,4,6
            //         ],
            //     ],
            // ],
        ]);
    }

    protected function setupUserFormData(): void
    {
        foreach ($this->userService()->formData(backpack_user()) as $key => $value) {
            $this->data[$key] = $value;
        }
    }

    protected function setupUserListFilters(): void
    {
        $roles = $this->userService()
            ->formData(backpack_user())['rolesList']
            ->mapWithKeys(fn ($role) => [$role->id => $role->display_name ?: $role->name])
            ->all();

        $this->addCrudListFilter([
            'name' => 'role',
            'label' => 'Grupo',
            'type' => 'select',
            'options' => $roles,
            'query' => function ($crud, $value) {
                $crud->addClause('whereHas', 'roles', function ($query) use ($value) {
                    $query->where('roles.id', $value);
                });
            },
        ]);

        $this->addCrudListFilter([
            'name' => 'email',
            'label' => 'E-mail',
            'type' => 'text',
            'placeholder' => 'Buscar por e-mail',
            'query' => function ($crud, $value) {
                $crud->addClause('where', 'email', 'like', "%{$value}%");
            },
        ]);
    }

    protected function applyUserVisibilityScope(): void
    {
        $user = backpack_user();

        if ($user && method_exists($user, 'hasRole') && ! $user->hasRole('super')) {
            $this->crud->addBaseClause('whereDoesntHave', 'roles', function ($query) {
                $query->where('name', 'super');
            });
        }
    }

    protected function userService(): UserService
    {
        return app(UserService::class);
    }
}
