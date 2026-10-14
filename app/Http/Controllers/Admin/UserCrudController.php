<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CreateSection;
use App\Enums\CrudListIcon;
use App\Http\Middleware\EnsureUserRouteContext;
use App\Http\Requests\UserStoreCrudRequest;
use App\Http\Requests\UserUpdateCrudRequest;
use App\Services\UserService;
use App\Traits\HasCreateSections;
use App\Traits\HasCrudEntryPolicy;
use App\Traits\HasCrudListFilters;
use App\Traits\HasCrudRoutePermissions;
use App\Traits\HasCrudUiPermissions;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;

class UserCrudController extends CrudController
{
    use CreateOperation { store as traitStore; }
    use DeleteOperation;
    use HasCreateSections;
    use HasCrudEntryPolicy;
    use HasCrudListFilters;
    use HasCrudRoutePermissions;
    use HasCrudUiPermissions;
    use ListOperation;
    use ShowOperation;
    use UpdateOperation { update as traitUpdate; }

    public function __construct()
    {
        parent::__construct();

        $this->middleware(EnsureUserRouteContext::class);
        $this->applyCrudRoutePermissions('users');
        $this->applyCrudEntryPolicy(config('backpack.permissionmanager.models.user'));
    }

    public function setup()
    {
        $this->crud->setModel(config('backpack.permissionmanager.models.user'));
        $this->crud->setEntityNameStrings(trans('backpack::permissionmanager.user'), trans('backpack::permissionmanager.users'));
        $this->crud->setRoute(backpack_url($this->userRoutePath()));

        CRUD::setCreateView('admin.users.form');
        CRUD::setEditView('admin.users.form');

        $this->crud->addBaseClause(function ($query): void {
            $this->userService()->applyVisibility($query, backpack_user());
        });
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
            [
                'name' => 'tenant.name',
                'label' => 'Empresa',
                'type' => 'text',
                'default' => '-',
            ],
            [
                'name' => 'active',
                'label' => 'Status',
                'type' => 'view',
                'view' => 'admin.crud.columns.active_switch',
                'status_url' => fn ($entry) => backpack_url("{$this->userRoutePath()}/{$entry->getKey()}/active"),
                'can_toggle' => function ($entry): bool {
                    $actor = backpack_user();

                    return (bool) $actor?->can('users.edit')
                        && Gate::forUser($actor)->allows('update', $entry);
                },
            ],
            [ // n-n relationship (with pivot table)
                'label' => trans('backpack::permissionmanager.roles'), // Table column heading
                'type' => 'closure',
                'name' => 'roles', // the method that defines the relationship in your Model
                'function' => function ($entry) {
                    return $entry->roles
                        ->map(function ($role) {
                            $label = e($role->display_name ?: $role->name);
                            $isTenantRole = str_starts_with($role->name, 'tenant_');
                            $color = $isTenantRole ? 'success' : 'primary';
                            $icon = $isTenantRole ? 'la-building' : 'la-cloud';

                            return '<span class="badge bg-'.$color.'-subtle text-'.$color.' border border-'.$color.'-subtle d-inline-flex align-items-center gap-1 px-2 py-1"><i class="la '.$icon.'"></i>'.$label.'</span>';
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
        $this->setupUserFormData();
        $this->addUserFields();
        $this->prepareCreateSections();
        $this->crud->setValidation(UserStoreCrudRequest::class);
    }

    public function setupUpdateOperation()
    {
        $this->setupUserFormData();
        $this->addUserFields();
        $this->prepareUpdateSections();
        $this->crud->setValidation(UserUpdateCrudRequest::class);
    }

    public function setupShowOperation()
    {
        // automatically add the columns
        $this->crud->column('name');
        $this->crud->column('email');
        $this->crud->column([
            'name' => 'active',
            'label' => 'Status',
            'type' => 'boolean',
            'options' => [0 => 'Inativo', 1 => 'Ativo'],
        ]);
        $this->crud->column([
            'name' => 'tenant.name',
            'label' => 'Empresa',
            'type' => 'text',
            'default' => '-',
        ]);
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
        $request = $this->crud->validateRequest();
        $avatar = $request->file('avatar');
        $removeAvatar = $request->boolean('remove_avatar');
        $request->files->remove('avatar');
        $request->replace(
            $this->userService()->prepareDataForSave($request->all(), backpack_user())
        );
        $this->crud->setRequest($request);
        $this->crud->unsetValidation(); // validation has already been run

        $response = $this->traitStore();
        $this->userService()->syncRolesAndPermissions(
            backpack_user(),
            $this->crud->entry,
            (array) $this->crud->getRequest()->input('roles', []),
            (array) $this->crud->getRequest()->input('permissions', [])
        );
        $this->userService()->syncAvatar($this->crud->entry, $avatar, $removeAvatar);

        return $response;
    }

    /**
     * Update the specified resource in the database.
     *
     * @return RedirectResponse
     */
    public function update()
    {
        $request = $this->crud->validateRequest();
        $avatar = $request->file('avatar');
        $removeAvatar = $request->boolean('remove_avatar');
        $request->files->remove('avatar');
        $request->replace(
            $this->userService()->prepareDataForSave($request->all(), backpack_user())
        );
        $this->crud->setRequest($request);
        $this->crud->unsetValidation(); // validation has already been run

        $response = $this->traitUpdate();
        $this->userService()->syncRolesAndPermissions(
            backpack_user(),
            $this->crud->entry,
            (array) $this->crud->getRequest()->input('roles', []),
            (array) $this->crud->getRequest()->input('permissions', [])
        );
        $this->userService()->syncAvatar($this->crud->entry, $avatar, $removeAvatar);

        return $response;
    }

    protected function addUserFields()
    {
        $this->crud->addFields([
            [
                'name' => 'avatar',
                'label' => 'Foto do usuário',
                'type' => 'starter_image_upload',
                'collection' => 'avatar',
                'upload' => true,
                'hint' => 'JPG, PNG ou WebP de até 5 MB. A imagem será recortada para o formato quadrado.',
                'section' => CreateSection::Main->value,
                'wrapper' => ['class' => 'form-group col-md-12'],
            ],
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
            [
                'name' => 'tenant_id',
                'label' => 'Empresa',
                'type' => 'select_from_array',
                'options' => $this->data['tenantOptions'] ?? [],
                'allows_null' => true,
                'placeholder' => 'Selecione a empresa',
                'attributes' => [
                    'class' => 'form-control form-select starter-select2',
                    'data-placeholder' => 'Selecione a empresa',
                ],
                'section' => CreateSection::Relations->value,
                'wrapper' => [
                    'class' => 'form-group col-md-12',
                    'id' => 'tenant-field-wrapper',
                ],
            ],
            [
                'name' => 'active',
                'label' => 'Usuário ativo',
                'type' => 'checkbox',
                'default' => true,
                'section' => CreateSection::Main->value,
                'wrapper' => ['class' => 'form-group col-md-12'],
            ],
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

        $this->addCrudListFilter([
            'name' => 'active',
            'label' => 'Status',
            'type' => 'select',
            'operator' => '=',
            'options' => ['1' => 'Ativo', '0' => 'Inativo'],
        ]);

        if (! backpack_user()?->tenant_id && ! request()->routeIs('backpack.company.*')) {
            $this->addCrudListFilter([
                'name' => 'tenant_id',
                'label' => 'Empresa',
                'type' => 'select',
                'operator' => '=',
                'options' => $this->userService()->tenantOptions(backpack_user()),
            ]);
        }
    }

    protected function userService(): UserService
    {
        return app(UserService::class);
    }

    private function userRoutePath(): string
    {
        return request()->routeIs('backpack.company.*')
            ? 'company/user'
            : 'user';
    }
}
