<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CrudListIcon;
use App\Services\RoleService;
use App\Traits\HasCrudRoutePermissions;
use App\Traits\HasCrudUiPermissions;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\PermissionManager\app\Http\Requests\RoleStoreCrudRequest as StoreRequest;
use Backpack\PermissionManager\app\Http\Requests\RoleUpdateCrudRequest as UpdateRequest;
use Spatie\Permission\PermissionRegistrar;

// VALIDATION

class RoleCrudController extends CrudController
{
    protected string $role_model;
    protected string $permission_model;

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { update as traitUpdate; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use HasCrudRoutePermissions;
    use HasCrudUiPermissions;

    public function __construct()
    {
        parent::__construct();

        $this->applyCrudRoutePermissions('roles');
    }

    public function setup()
    {
        $this->role_model = $role_model = config('backpack.permissionmanager.models.role');
        $this->permission_model = $permission_model = config('backpack.permissionmanager.models.permission');

        $this->crud->setModel($role_model);
        $this->crud->setEntityNameStrings(trans('backpack::permissionmanager.role'), trans('backpack::permissionmanager.roles'));
        $this->crud->setRoute(backpack_url('role'));

        CRUD::setCreateView('admin.roles.form');
        CRUD::setEditView('admin.roles.form');

        $this->applyCrudUiPermissions('roles');

        // deny access according to configuration file
        if (config('backpack.permissionmanager.allow_role_create') == false) {
            $this->crud->denyAccess('create');
        }
        if (config('backpack.permissionmanager.allow_role_update') == false) {
            $this->crud->denyAccess('update');
        }
        if (config('backpack.permissionmanager.allow_role_delete') == false) {
            $this->crud->denyAccess('delete');
        }
    }

    public function setupListOperation()
    {
        $this->crud->set('list.icon', CrudListIcon::Roles->value);

        /**
         * Show a column for the name of the role.
         */
        $this->crud->addColumn([
            'name'  => 'name',
            'label' => trans('backpack::permissionmanager.name'),
            'type'  => 'text',
        ]);

        $this->crud->addColumn([
            'name'  => 'display_name',
            'label' => 'Nome de exibição',
            'type'  => 'text',
        ]);

        /**
         * Show a column with the number of users that have that particular role.
         *
         * Note: To account for the fact that there can be thousands or millions
         * of users for a role, we did not use the `relationship_count` column,
         * but instead opted to append a fake `user_count` column to
         * the result, using Laravel's `withCount()` method.
         * That way, no users are loaded.
         */
        $this->crud->query->withCount('users');
        $this->crud->addColumn([
            'label'     => trans('backpack::permissionmanager.users'),
            'type'      => 'text',
            'name'      => 'users_count',
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('user?role='.$entry->getKey());
                },
            ],
            'suffix'    => ' '.strtolower(trans('backpack::permissionmanager.users')),
        ]);

        /**
         * In case multiple guards are used, show a column for the guard.
         */
        if (config('backpack.permissionmanager.multiple_guards')) {
            $this->crud->addColumn([
                'name'  => 'guard_name',
                'label' => trans('backpack::permissionmanager.guard_type'),
                'type'  => 'text',
            ]);
        }

    }

    public function setupCreateOperation()
    {
        $this->addFields();
        $this->setupRoleFormData();
        $this->crud->setValidation(StoreRequest::class);

        //otherwise, changes won't have effect
        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function setupUpdateOperation()
    {
        $this->addFields();
        $this->setupRoleFormData();
        $this->crud->setValidation(UpdateRequest::class);

        //otherwise, changes won't have effect
        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function store()
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->unsetValidation();

        $response = $this->traitStore();
        $this->roleService()->syncPermissions(
            $this->crud->entry,
            (array) $this->crud->getRequest()->input('permissions', [])
        );

        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();

        return $response;
    }

    public function update()
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->unsetValidation();

        $response = $this->traitUpdate();
        $this->roleService()->syncPermissions(
            $this->crud->entry,
            (array) $this->crud->getRequest()->input('permissions', [])
        );

        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();

        return $response;
    }

    private function addFields()
    {
        $this->crud->addField([
            'name'  => 'name',
            'label' => trans('backpack::permissionmanager.name'),
            'type'  => 'text',
            'hint'  => 'Use em inglês (identificador técnico) para manter o padrão do sistema. Ex.: "process_manager".',
        ]);

        $this->crud->addField([
            'name'  => 'display_name',
            'label' => 'Nome de exibição',
            'type'  => 'text',
            'hint'  => 'Use em português (nome amigável) que será exibido para os usuários no painel. Ex.: "Gerente de Processos".',
        ]);

        if (config('backpack.permissionmanager.multiple_guards')) {
            $this->crud->addField([
                'name'    => 'guard_name',
                'label'   => trans('backpack::permissionmanager.guard_type'),
                'type'    => 'select_from_array',
                'options' => $this->getGuardTypes(),
            ]);
        }

    }

    protected function setupRoleFormData(): void
    {
        $this->data['permissionsList'] = $this->roleService()->permissionsForForm();
    }

    protected function roleService(): RoleService
    {
        return app(RoleService::class);
    }

    /*
     * Get an array list of all available guard types
     * that have been defined in app/config/auth.php
     *
     * @return array
     **/
    private function getGuardTypes()
    {
        $guards = config('auth.guards');

        $returnable = [];
        foreach ($guards as $key => $details) {
            $returnable[$key] = $key;
        }

        return $returnable;
    }
}
