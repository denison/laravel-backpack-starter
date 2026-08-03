<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CreateSection;
use App\Enums\CrudListIcon;
use App\Http\Requests\TenantRequest;
use App\Models\Tenant;
use App\Services\TenantService;
use App\Traits\HasCreateSections;
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

class TenantCrudController extends CrudController
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

        $this->applyCrudRoutePermissions('tenants');
    }

    public function setup(): void
    {
        CRUD::setModel(Tenant::class);
        CRUD::setRoute(backpack_url('tenant'));
        CRUD::setEntityNameStrings('empresa', 'empresas');

        $this->applyCrudUiPermissions('tenants');
    }

    protected function setupListOperation(): void
    {
        $this->crud->set('list.icon', CrudListIcon::Tenants->value);
        $this->crud->addClause('with', 'media');
        $this->crud->orderBy('name');

        $this->setupListFilters();

        CRUD::addColumns([
            [
                'name' => 'logo',
                'label' => 'Logo',
                'type' => 'view',
                'view' => 'admin.crud.columns.tenant_logo',
                'orderable' => false,
                'searchLogic' => false,
                'priority' => 1,
            ],
            ['name' => 'name', 'label' => 'Nome', 'type' => 'text'],
            [
                'name' => 'formatted_document',
                'label' => 'CPF/CNPJ',
                'type' => 'text',
            ],
            ['name' => 'city', 'label' => 'Cidade', 'type' => 'text'],
            ['name' => 'state', 'label' => 'UF', 'type' => 'text'],
            [
                'name' => 'active',
                'label' => 'Status',
                'type' => 'view',
                'view' => 'admin.crud.columns.active_switch',
                'status_url' => fn ($entry) => backpack_url("tenant/{$entry->getKey()}/active"),
                'can_toggle' => backpack_user()?->can('tenants.edit') ?? false,
                'active_label' => 'Ativa',
                'inactive_label' => 'Inativa',
            ],
            ['name' => 'created_at', 'label' => 'Criada em', 'type' => 'datetime'],
        ]);

        $this->applyCrudListFilters();
    }

    protected function setupCreateOperation(): void
    {
        CRUD::setValidation(TenantRequest::class);
        $this->addTenantFields();
        $this->prepareCreateSections();
    }

    public function store()
    {
        $request = $this->crud->validateRequest();
        $logo = $request->file('logo');
        $removeLogo = $request->boolean('remove_logo');
        $request->files->remove('logo');
        $this->crud->setRequest($request);
        $this->crud->unsetValidation();

        $response = $this->traitStore();
        $this->tenantService()->syncLogo($this->crud->entry, $logo, $removeLogo);

        return $response;
    }

    protected function setupUpdateOperation(): void
    {
        CRUD::setValidation(TenantRequest::class);
        $this->addTenantFields();
        $this->prepareUpdateSections();
    }

    public function update()
    {
        $request = $this->crud->validateRequest();
        $logo = $request->file('logo');
        $removeLogo = $request->boolean('remove_logo');
        $request->files->remove('logo');
        $this->crud->setRequest($request);
        $this->crud->unsetValidation();

        $response = $this->traitUpdate();
        $this->tenantService()->syncLogo($this->crud->entry, $logo, $removeLogo);

        return $response;
    }

    protected function setupShowOperation(): void
    {
        CRUD::addColumns([
            ['name' => 'name', 'label' => 'Nome', 'type' => 'text'],
            ['name' => 'slug', 'label' => 'Slug', 'type' => 'text'],
            ['name' => 'formatted_document', 'label' => 'CPF/CNPJ', 'type' => 'text'],
            ['name' => 'contact_name', 'label' => 'Contato', 'type' => 'text'],
            ['name' => 'email', 'label' => 'E-mail', 'type' => 'email'],
            ['name' => 'formatted_phone', 'label' => 'Telefone', 'type' => 'text'],
            ['name' => 'formatted_whatsapp', 'label' => 'WhatsApp', 'type' => 'text'],
            ['name' => 'postal_code', 'label' => 'CEP', 'type' => 'text'],
            ['name' => 'street', 'label' => 'Logradouro', 'type' => 'text'],
            ['name' => 'number', 'label' => 'Número', 'type' => 'text'],
            ['name' => 'complement', 'label' => 'Complemento', 'type' => 'text'],
            ['name' => 'district', 'label' => 'Bairro', 'type' => 'text'],
            ['name' => 'city', 'label' => 'Cidade', 'type' => 'text'],
            ['name' => 'state', 'label' => 'UF', 'type' => 'text'],
            ['name' => 'country_code', 'label' => 'País', 'type' => 'text'],
            ['name' => 'active', 'label' => 'Status', 'type' => 'boolean', 'options' => [0 => 'Inativa', 1 => 'Ativa']],
            ['name' => 'created_at', 'label' => 'Criada em', 'type' => 'datetime'],
            ['name' => 'updated_at', 'label' => 'Atualizada em', 'type' => 'datetime'],
        ]);
    }

    private function addTenantFields(): void
    {
        CRUD::addFields([
            [
                'name' => 'logo',
                'label' => 'Logo da empresa',
                'type' => 'starter_image_upload',
                'collection' => 'logo',
                'upload' => true,
                'hint' => 'JPG, PNG ou WebP de até 5 MB. Prefira uma imagem com fundo transparente.',
                'section' => CreateSection::Main->value,
                'wrapper' => ['class' => 'form-group col-md-12'],
            ],
            [
                'name' => 'name',
                'label' => 'Nome',
                'type' => 'text',
                'section' => CreateSection::Main->value,
                'wrapper' => ['class' => 'form-group col-md-12'],
            ],
            [
                'name' => 'document_type',
                'label' => 'Tipo de documento',
                'type' => 'select_from_array',
                'options' => ['cnpj' => 'CNPJ', 'cpf' => 'CPF'],
                'section' => CreateSection::Main->value,
                'wrapper' => ['class' => 'form-group col-md-6'],
                'attributes' => [
                    'class' => 'form-control form-select',
                    'data-document-mask-target' => 'document',
                ],
            ],
            [
                'name' => 'document',
                'label' => 'CPF/CNPJ',
                'type' => 'text',
                'section' => CreateSection::Main->value,
                'wrapper' => ['class' => 'form-group col-md-6'],
                'attributes' => [
                    'class' => 'form-control starter-mask-document',
                    'inputmode' => 'numeric',
                    'maxlength' => 18,
                    'data-document-type-field' => 'document_type',
                ],
            ],
            [
                'name' => 'active',
                'label' => 'Empresa ativa',
                'type' => 'checkbox',
                'default' => true,
                'section' => CreateSection::Main->value,
                'wrapper' => ['class' => 'form-group col-md-12'],
            ],
            ['name' => 'contact_name', 'label' => 'Nome do contato', 'type' => 'text', 'section' => CreateSection::Details->value],
            ['name' => 'email', 'label' => 'E-mail', 'type' => 'email', 'section' => CreateSection::Details->value],
            [
                'name' => 'phone',
                'label' => 'Telefone',
                'type' => 'text',
                'section' => CreateSection::Details->value,
                'attributes' => [
                    'class' => 'form-control starter-mask-phone',
                    'inputmode' => 'tel',
                    'maxlength' => 15,
                ],
            ],
            [
                'name' => 'whatsapp',
                'label' => 'WhatsApp',
                'type' => 'text',
                'section' => CreateSection::Details->value,
                'attributes' => [
                    'class' => 'form-control starter-mask-phone',
                    'inputmode' => 'tel',
                    'maxlength' => 15,
                ],
            ],
            [
                'name' => 'postal_code',
                'label' => 'CEP',
                'type' => 'text',
                'section' => CreateSection::Address->value,
                'attributes' => [
                    'class' => 'form-control starter-postal-code starter-mask-cep',
                    'inputmode' => 'numeric',
                    'maxlength' => 9,
                    'autocomplete' => 'postal-code',
                    'data-lookup-url' => backpack_url('postal-code/__CEP__'),
                ],
            ],
            ['name' => 'street', 'label' => 'Logradouro', 'type' => 'text', 'section' => CreateSection::Address->value],
            ['name' => 'number', 'label' => 'Número', 'type' => 'text', 'section' => CreateSection::Address->value],
            ['name' => 'complement', 'label' => 'Complemento', 'type' => 'text', 'section' => CreateSection::Address->value],
            ['name' => 'district', 'label' => 'Bairro', 'type' => 'text', 'section' => CreateSection::Address->value],
            ['name' => 'city', 'label' => 'Cidade', 'type' => 'text', 'section' => CreateSection::Address->value],
            ['name' => 'state', 'label' => 'UF', 'type' => 'text', 'attributes' => ['maxlength' => 2], 'section' => CreateSection::Address->value],
            ['name' => 'country_code', 'label' => 'País', 'type' => 'hidden', 'default' => 'BR', 'section' => CreateSection::Address->value],
        ]);
    }

    private function setupListFilters(): void
    {
        foreach ([
            ['name' => 'name', 'label' => 'Nome', 'placeholder' => 'Buscar por nome'],
            ['name' => 'city', 'label' => 'Cidade', 'placeholder' => 'Buscar por cidade'],
            ['name' => 'state', 'label' => 'UF', 'placeholder' => 'Buscar por UF'],
        ] as $filter) {
            $this->addCrudListFilter($filter);
        }

        $this->addCrudListFilter([
            'name' => 'document',
            'label' => 'CPF/CNPJ',
            'placeholder' => 'Buscar por documento',
            'query' => function ($crud, $value) {
                $document = preg_replace('/\D+/', '', (string) $value);
                $crud->addClause('where', 'document', 'like', "%{$document}%");
            },
        ]);

        $this->addCrudListFilter([
            'name' => 'active',
            'label' => 'Status',
            'type' => 'select',
            'operator' => '=',
            'options' => ['1' => 'Ativa', '0' => 'Inativa'],
        ]);
    }

    private function tenantService(): TenantService
    {
        return app(TenantService::class);
    }
}
