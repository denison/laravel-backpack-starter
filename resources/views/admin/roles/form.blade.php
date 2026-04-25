{{-- resources/views/admin/roles/form.blade.php --}}
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

        $permissionsList = $permissionsList ?? collect();

        $selectedPermissions = (array) old(
            'permissions',
            $entry ? $entry->permissions->pluck('id')->toArray() : []
        );

        $groupedPermissions = [];
        foreach ($permissionsList as $permission) {
            $name = $permission->name ?? '';
            [$rawBlock, $action] = array_pad(explode('.', $name, 2), 2, '');
            $block = strtolower($rawBlock ?: 'blocks');

            $config = trans("permission-blocks.$block");
            if (is_array($config)) {
                $blockLabel = $config['plural'] ?? $config['singular'] ?? ucfirst($block);
            } else {
                $blockLabel = ucfirst(str_replace('_', ' ', $block));
            }

            $groupedPermissions[$blockLabel][] = [
                'model'  => $permission,
                'action' => $action,
            ];
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
                        {{-- NAME (slug) --}}
                        @if ($nameField)
                            @php
                                $fieldName  = $nameField['name'];
                                $fieldLabel = $nameField['label'] ?? 'Nome';
                                $fieldValue = old($fieldName, $nameField['value'] ?? ($entry->{$fieldName} ?? null));
                            @endphp
                            <div class="form-group col-md-12">
                                <label>{!! $fieldLabel !!}</label>
                                <input type="text" name="{{ $fieldName }}" value="{{ $fieldValue }}" class="form-control">
                                @if (!empty($nameField['hint']))
                                    <div class="form-hint text-muted mt-2 small">
                                        <i class="la la-info-circle text-primary me-1"></i>{{ $nameField['hint'] }}
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
                            @endphp
                            <div class="form-group col-md-12">
                                <label>{!! $fieldLabel !!}</label>
                                <input type="text" name="{{ $fieldName }}" value="{{ $fieldValue }}" class="form-control">
                                @if (!empty($displayNameField['hint']))
                                    <div class="form-hint text-muted mt-2 small">
                                        <i class="la la-info-circle text-primary me-1"></i>{{ $displayNameField['hint'] }}
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

                <div class="card mt-3">
                    <div class="card-body row">
                        <div class="form-group col-md-12">
                            <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-2">
                                <label class="mb-1 mb-md-0 fw-bold">Permissões</label>
                                <small class="text-muted fw-bold">
                                    Ative as ações desejadas em cada módulo.
                                </small>
                            </div>

                            <div class="row permission-modules-grid">
                                @foreach ($groupedPermissions as $blockLabel => $items)
                                    <div class="col-12 col-md-6 mb-3">
                                        <div class="permission-module card h-100">
                                            <div class="permission-module-header">
                                                <span class="permission-module-title">
                                                    {{ $blockLabel }}
                                                </span>
                                            </div>

                                            <div class="permission-module-actions">
                                                @foreach ($items as $item)
                                                    @php
                                                        /** @var \App\Models\Permission $perm */
                                                        $perm   = $item['model'];
                                                        $action = $item['action'];

                                                        $actionLabel = $perm->display_name
                                                            ?? ucfirst(str_replace('_', ' ', $action));
                                                    @endphp

                                                    <div class="form-check form-switch permission-switch">
                                                        <input
                                                            class="form-check-input permission-checkbox"
                                                            type="checkbox"
                                                            role="switch"
                                                            id="permission_{{ $perm->id }}"
                                                            name="permissions[]"
                                                            value="{{ $perm->id }}"
                                                            {{ in_array($perm->id, $selectedPermissions) ? 'checked' : '' }}
                                                        >
                                                        <label class="form-check-label permission-action-label" for="permission_{{ $perm->id }}">
                                                            {{ $actionLabel }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                @include('crud::inc.form_save_buttons')
            </form>
        </div>
    </div>
@endsection

@push('after_styles')
    <style>
        .permission-switch .form-check-input {
            width: 2.8rem;
            flex-shrink: 0;
        }

        .permission-modules-grid {
            margin-top: .25rem;
        }

        .permission-module {
            border-radius: var(--bs-border-radius, .5rem);
            padding: .75rem .9rem .6rem;
        }

        .permission-module-header {
            margin-bottom: .35rem;
        }

        .permission-module-title {
            font-weight: 600;
            font-size: .93rem;
        }

        .permission-module-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: .25rem .75rem;
        }

        .permission-switch {
            display: flex;
            align-items: center;
            gap: .4rem;
            margin: 0;
        }

        .permission-action-label {
            font-size: .85rem;
            line-height: 1.25;
            white-space: normal;
        }

        @media (max-width: 576px) {
            .permission-module {
                padding: .7rem .7rem .55rem;
            }
        }
    </style>
@endpush
