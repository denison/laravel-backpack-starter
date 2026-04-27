@extends(backpack_view('blank'))

@php
    $starterOperation = $starterOperation ?? $crud->getOperation();
    $starterIsUpdate = $starterOperation === 'update';
    $starterEntry = $entry ?? $crud->getCurrentEntry();
    $starterFormId = $id ?? 'crudForm';

    $starterActionLabel = $starterIsUpdate
        ? trans('backpack::crud.edit')
        : trans('backpack::crud.add');

    $defaultBreadcrumbs = [
        trans('backpack::crud.admin') => backpack_url('dashboard'),
        $crud->entity_name_plural => url($crud->route),
        $starterActionLabel => false,
    ];

    $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;

    $starterContentClass = $starterIsUpdate
        ? $crud->getEditContentClass()
        : $crud->getCreateContentClass();

    $starterFormAction = $starterIsUpdate
        ? url($crud->route.'/'.$starterEntry->getKey())
        : url($crud->route);

    $starterHasUpload = $starterIsUpdate
        ? $crud->hasUploadFields('update', $starterEntry->getKey())
        : $crud->hasUploadFields('create');

    $starterIcon = $starterIcon
        ?? $crud->getOperationSetting('crudIcon')
        ?? ($starterIsUpdate ? 'la la-edit' : 'la la-plus');

    $starterTitle = $starterTitle ?? $starterActionLabel.' '.$crud->entity_name;

    $starterDescription = $starterDescription ?? ($starterIsUpdate
        ? 'Atualize as informações abaixo para manter este cadastro em dia.'
        : 'Preencha as informações abaixo para criar um novo cadastro.');

    $starterRootClass = $starterIsUpdate
        ? 'starter-create starter-edit'
        : 'starter-create';

    $starterBpSection = $starterIsUpdate
        ? 'crud-operation-update'
        : 'crud-operation-create';
@endphp

@section('header')
    <section
        class="header-operation container-fluid animated fadeIn d-print-none starter-create-header-spacer"
        bp-section="page-header"
    ></section>
@endsection

@section('content')
    <div class="{{ $starterRootClass }}" bp-section="{{ $starterBpSection }}">
        <div class="{{ $starterContentClass }}">
            @include('crud::inc.grouped_errors', ['id' => $starterFormId])

            <form method="post"
                  action="{{ $starterFormAction }}"
                  id="{{ $starterFormId }}"
                  @if ($starterHasUpload)
                      enctype="multipart/form-data"
                  @endif
            >
                {!! csrf_field() !!}

                @if ($starterIsUpdate)
                    {!! method_field('PUT') !!}
                    <input
                        type="hidden"
                        name="{{ $crud->model->getKeyName() }}"
                        value="{{ $starterEntry->getKey() }}"
                    >
                @endif

                <div class="starter-create-surface">
                    <div class="starter-create-intro">
                        <div class="starter-create-intro-icon">
                            <i class="{{ $starterIcon }}"></i>
                        </div>

                        <div class="starter-create-intro-content">
                            <h2>{{ $starterTitle }}</h2>
                            <p>{{ $starterDescription }}</p>
                        </div>

                        @if ($crud->hasAccess('list'))
                            <a href="{{ url($crud->route) }}" class="starter-create-back">
                                <i class="la la-arrow-left"></i>
                                <span>Voltar para todos</span>
                            </a>
                        @endif
                    </div>

                    @if ($starterIsUpdate)
                        @includeWhen($crud->model->translationEnabled(), 'crud::inc.edit_translation_notice')
                    @endif

                    @yield('starter_form_fields')

                    <div class="d-none" id="parentLoadedAssets">{{ json_encode(Basset::loaded()) }}</div>

                    <div class="starter-create-actions">
                        @include('crud::inc.form_save_buttons')
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
