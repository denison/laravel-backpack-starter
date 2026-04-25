{{-- resources/views/admin/permissions/form.blade.php --}}
@extends(backpack_view('blank'))
@php
  $defaultBreadcrumbs = [
    trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
    $crud->entity_name_plural => url($crud->route),
    trans('backpack::crud.add') => false,
  ];

  $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;
@endphp

@section('header')
    <section class="header-operation container-fluid animated fadeIn d-flex mb-2 align-items-baseline d-print-none" bp-section="page-header">
        <h1 class="text-capitalize mb-0" bp-section="page-heading">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</h1>
        <p class="ms-2 ml-2 mb-0" bp-section="page-subheading">{!! $crud->getSubheading() ?? trans('backpack::crud.add').' '.$crud->entity_name !!}.</p>
        @if ($crud->hasAccess('list'))
            <p class="mb-0 ms-2 ml-2" bp-section="page-subheading-back-button">
                <small>
                    <a href="{{ url($crud->route) }}" class="d-print-none font-sm">
                        <span><i class="la la-angle-double-{{ config('backpack.base.html_direction') == 'rtl' ? 'right' : 'left' }}"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></span>
                    </a>
                </small>
            </p>
        @endif
    </section>
@endsection

@section('content')
    @php
        $isEdit  = $crud->getOperation() === 'update';
        $entry   = $crud->getCurrentEntry();
        $fields  = $crud->getCurrentFields();

        $nameField = $fields['name'] ?? null;
        $displayNameField = $fields['display_name'] ?? null;
        $guardNameField = $fields['guard_name'] ?? null;

        if ($isEdit && $entry) {
            $formAction = url($crud->route.'/'.$entry->getKey());
            $hasUpload  = $crud->hasUploadFields('update', $entry->getKey());
        } else {
            $formAction = url($crud->route);
            $hasUpload  = $crud->hasUploadFields('create');
        }
    @endphp

    <div class="row">
        <div class="col-md-12 bold-labels">
            @include('crud::inc.grouped_errors')

            <form method="post"
                action="{{ $formAction }}"
                @if ($hasUpload) enctype="multipart/form-data" @endif
            >
                @csrf
                @if ($isEdit)
                    @method('PUT')
                @endif

                @if ($isEdit && $entry)
                    <input type="hidden"
                        name="{{ $crud->model->getKeyName() }}"
                        value="{{ $entry->getKey() }}">
                @endif

                <div class="card">
                    <div class="card-body row">
                        {{-- NAME --}}
                        @if ($nameField)
                            @php
                                $fieldName  = $nameField['name'];
                                $fieldLabel = $nameField['label'] ?? 'Nome';
                                $fieldValue = old($fieldName, $nameField['value'] ?? ($entry->{$fieldName} ?? null));
                                $fieldHint  = $nameField['hint'] ?? null;
                            @endphp
                            <div class="form-group col-md-12">
                                <label>{!! $fieldLabel !!}</label>
                                <input type="text" name="{{ $fieldName }}" value="{{ $fieldValue }}" class="form-control">
                                @if (!empty($fieldHint))
                                    <div class="form-hint text-muted mt-2 small">
                                        <i class="la la-info-circle text-primary me-1"></i>
                                        @php
                                            $hintLines = preg_split("/\\r\\n|\\r|\\n/", trim($fieldHint));
                                        @endphp
                                        <div class="mt-1 ps-3">
                                            @foreach ($hintLines as $line)
                                                <div class="{{ (substr(trim($line), 0, 1) === '-') ? 'ps-2' : '' }}">
                                                    <span class="font-monospace">{{ $line }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif

                        {{-- DISPLAY NAME --}}
                        @if ($displayNameField)
                            @php
                                $fieldName  = $displayNameField['name'];
                                $fieldLabel = $displayNameField['label'] ?? 'Nome de exibição';
                                $fieldValue = old($fieldName, $displayNameField['value'] ?? ($entry->{$fieldName} ?? null));
                                $fieldHint  = $displayNameField['hint'] ?? null;
                            @endphp
                            <div class="form-group col-md-12">
                                <label>{!! $fieldLabel !!}</label>
                                <input type="text" name="{{ $fieldName }}" value="{{ $fieldValue }}" class="form-control">
                                @if (!empty($fieldHint))
                                    <div class="form-hint text-muted mt-2 small">
                                        <i class="la la-info-circle text-primary me-1"></i>{{ $fieldHint }}
                                    </div>
                                @endif
                            </div>
                        @endif

                        {{-- GUARD (optional) --}}
                        @if ($guardNameField)
                            @include($guardNameField['view_namespace'] ?? 'crud::fields.'.$guardNameField['type'], ['field' => $guardNameField])
                        @endif
                    </div>
                </div>

                @include('crud::inc.form_save_buttons')
            </form>
        </div>
    </div>
@endsection
