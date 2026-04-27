<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CreateSection;
use App\Enums\CrudListIcon;
use App\Traits\HasCreateSections;
use App\Traits\HasCrudRoutePermissions;
use App\Traits\HasCrudUiPermissions;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\PermissionManager\app\Http\Requests\PermissionStoreCrudRequest as StoreRequest;
use Backpack\PermissionManager\app\Http\Requests\PermissionUpdateCrudRequest as UpdateRequest;
use Spatie\Permission\PermissionRegistrar;

// VALIDATION

class PermissionCrudController extends CrudController
{
    protected string $role_model;

    protected string $permission_model;

    use CreateOperation;
    use DeleteOperation;
    use HasCreateSections;
    use HasCrudRoutePermissions;
    use HasCrudUiPermissions;
    use ListOperation;
    use UpdateOperation;

    public function __construct()
    {
        parent::__construct();

        $this->applyCrudRoutePermissions('permissions');
    }

    public function setup()
    {
        $this->role_model = $role_model = config('backpack.permissionmanager.models.role');
        $this->permission_model = $permission_model = config('backpack.permissionmanager.models.permission');

        $this->crud->setModel($permission_model);
        $this->crud->setEntityNameStrings(trans('backpack::permissionmanager.permission_singular'), trans('backpack::permissionmanager.permission_plural'));
        $this->crud->setRoute(backpack_url('permission'));

        // CRUD::setCreateView('admin.permissions.form');
        // CRUD::setEditView('admin.permissions.form');

        $this->applyCrudUiPermissions('permissions');

        // deny access according to configuration file
        if (config('backpack.permissionmanager.allow_permission_create') == false) {
            $this->crud->denyAccess('create');
        }
        if (config('backpack.permissionmanager.allow_permission_update') == false) {
            $this->crud->denyAccess('update');
        }
        if (config('backpack.permissionmanager.allow_permission_delete') == false) {
            $this->crud->denyAccess('delete');
        }
    }

    public function setupListOperation()
    {
        $this->crud->set('list.icon', CrudListIcon::Permissions->value);

        $this->crud->addColumn([
            'name' => 'name',
            'label' => trans('backpack::permissionmanager.name'),
            'type' => 'text',
        ]);

        $this->crud->addColumn([
            'name' => 'display_name',
            'label' => 'Nome de exibição',
            'type' => 'text',
        ]);

        if (config('backpack.permissionmanager.multiple_guards')) {
            $this->crud->addColumn([
                'name' => 'guard_name',
                'label' => trans('backpack::permissionmanager.guard_type'),
                'type' => 'text',
            ]);
        }
    }

    public function setupCreateOperation()
    {
        $this->addFields();
        $this->prepareCreateSections();
        $this->crud->setValidation(StoreRequest::class);

        // otherwise, changes won't have effect
        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function setupUpdateOperation()
    {
        $this->addFields();
        $this->prepareUpdateSections();
        $this->crud->setValidation(UpdateRequest::class);

        // otherwise, changes won't have effect
        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    private function addFields()
    {
        $this->crud->addField([
            'name' => 'name',
            'label' => trans('backpack::permissionmanager.name'),
            'type' => 'text',
            'section' => CreateSection::Main->value,
            'hint' => implode("\n", [
                'Padrão: resource.action (em inglês, usado no código).',
                'Exemplos:',
                '- processes.access',
                '- processes.create',
                '- processes.edit',
                '- processes.delete',
            ]),
        ]);

        $this->crud->addField([
            'name' => 'display_name',
            'label' => 'Nome de exibição',
            'type' => 'text',
            'section' => CreateSection::Main->value,
            'hint' => 'Use em português (nome amigável) que será exibido para os usuários no painel.',
        ]);

        //  $this->crud->addField([
        //     'name' => 'name2',
        //     'label' =>'TEste',
        //     'type' => 'text',
        //     'section' => CreateSection::Custom->value,
        //     'hint' => implode("\n", [
        //         'Padrão: resource.action (em inglês, usado no código).',
        //         'Exemplos:',
        //         '- processes.access',
        //         '- processes.create',
        //         '- processes.edit',
        //         '- processes.delete',
        //     ]),
        // ]);

        // $this->crud->addField([
        //     'name' => 'display_name2',
        //     'label' => 'TEste',
        //     'type' => 'text',
        //     'section' => CreateSection::Details->value,
        //     'hint' => 'Use em português (nome amigável) que será exibido para os usuários no painel.',
        // ]);

        if (config('backpack.permissionmanager.multiple_guards')) {
            $this->crud->addField([
                'name' => 'guard_name',
                'label' => trans('backpack::permissionmanager.guard_type'),
                'type' => 'select_from_array',
                'options' => $this->getGuardTypes(),
            ]);
        }
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
