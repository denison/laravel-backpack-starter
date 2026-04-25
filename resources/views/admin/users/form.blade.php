{{-- resources/views/admin/users/form.blade.php --}}
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
        $isEdit = $crud->getOperation() === 'update';
        $entry = $crud->getCurrentEntry() ?: null;
        $fields = $crud->getCurrentFields();

        $nameField = $fields['name'] ?? null;
        $emailField = $fields['email'] ?? null;
        $passwordField = $fields['password'] ?? null;
        $passConfirmField = $fields['password_confirmation'] ?? null;

        if ($isEdit && $entry) {
            $formAction = url($crud->route.'/'.$entry->getKey());
            $hasUpload = $crud->hasUploadFields('update', $entry->getKey());
        } else {
            $formAction = url($crud->route);
            $hasUpload = $crud->hasUploadFields('create');
        }

        $rolesList = $rolesList ?? collect();
        $permissionsList = $permissionsList ?? collect();

        $selectedRoles = (array) old(
            'roles',
            $entry ? $entry->roles->pluck('id')->toArray() : []
        );
        $selectedRoles = array_slice($selectedRoles, 0, 1);

        $selectedPermissions = (array) old(
            'permissions',
            $entry ? $entry->permissions->pluck('id')->toArray() : []
        );

        $permissionRoleMap = [];
        foreach ($rolesList as $role) {
            foreach ($role->permissions as $rolePermission) {
                $permissionRoleMap[$rolePermission->id][] = (int) $role->id;
            }
        }

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
                'model' => $permission,
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
                    <input type="hidden" name="{{ $crud->model->getKeyName() }}" value="{{ $entry->getKey() }}">
                @endif

                <div class="card">
                    <div class="card-body row">
                        @if ($nameField)
                            @php
                                $fieldName = $nameField['name'];
                                $fieldLabel = $nameField['label'] ?? 'Nome';
                                $fieldValue = old($fieldName, $nameField['value'] ?? ($entry->{$fieldName} ?? null));
                            @endphp
                            <div class="form-group col-md-12">
                                <label>{!! $fieldLabel !!}</label>
                                <input type="text" name="{{ $fieldName }}" value="{{ $fieldValue }}" class="form-control">
                            </div>
                        @endif

                        @if ($emailField)
                            @php
                                $fieldName = $emailField['name'];
                                $fieldLabel = $emailField['label'] ?? 'Email';
                                $fieldValue = old($fieldName, $emailField['value'] ?? ($entry->{$fieldName} ?? null));
                            @endphp
                            <div class="form-group col-md-12">
                                <label>{!! $fieldLabel !!}</label>
                                <input type="email" name="{{ $fieldName }}" value="{{ $fieldValue }}" class="form-control">
                            </div>
                        @endif

                        @if ($passwordField)
                            <div class="form-group col-md-12">
                                <label>{!! $passwordField['label'] ?? 'Senha' !!} @unless($isEdit)<span class="text-danger">*</span>@endunless</label>
                                <input type="password" name="{{ $passwordField['name'] }}" class="form-control" autocomplete="new-password">
                            </div>
                        @endif

                        @if ($passConfirmField)
                            <div class="form-group col-md-12">
                                <label>{!! $passConfirmField['label'] ?? 'Confirmar senha' !!} @unless($isEdit)<span class="text-danger">*</span>@endunless</label>
                                <input type="password" name="{{ $passConfirmField['name'] }}" class="form-control" autocomplete="new-password">
                            </div>
                        @endif
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body row">
                        @if ($rolesList->count())
                            <div class="form-group col-md-12">
                                <label class="fw-bold">Grupos</label>

                                <div class="role-chip-group">
                                    @foreach ($rolesList as $role)
                                        @php
                                            $roleId = $role->id;
                                            $isChecked = in_array($roleId, $selectedRoles);
                                            $htmlId = 'role_'.$roleId;
                                            $roleLabel = $role->display_name ?: $role->name;
                                        @endphp

                                        <input
                                            type="radio"
                                            class="btn-check role-checkbox"
                                            id="{{ $htmlId }}"
                                            name="roles[]"
                                            value="{{ $roleId }}"
                                            {{ $isChecked ? 'checked' : '' }}
                                        >
                                        <label class="btn btn-outline-primary btn-sm role-chip" for="{{ $htmlId }}">
                                            {{ $roleLabel }}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        @if (! empty($groupedPermissions))
                            <div id="permissions-wrapper" class="form-group col-md-12 mt-3 d-none">
                                <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-2">
                                    <label class="mb-1 mb-md-0 fw-bold">Permissões</label>
                                    <small class="text-muted fw-bold">
                                        O padrão do grupo fica marcado e travado; permissões extras ficam livres para marcar.
                                    </small>
                                </div>

                                <div class="row permission-modules-grid">
                                    @foreach ($groupedPermissions as $blockLabel => $items)
                                        <div class="col-12 col-md-6 mb-3 permission-module-column d-none">
                                            <div class="permission-module card h-100">
                                                <div class="permission-module-header">
                                                    <span class="permission-module-title">{{ $blockLabel }}</span>
                                                </div>

                                                <div class="permission-module-actions">
                                                    @foreach ($items as $item)
                                                        @php
                                                            $perm = $item['model'];
                                                            $action = $item['action'];
                                                            $actionLabel = $perm->display_name ?: ucfirst(str_replace('_', ' ', $action));
                                                            $roleIds = $permissionRoleMap[$perm->id] ?? [];
                                                        @endphp

                                                        <div
                                                            class="form-check form-switch permission-switch permission-item"
                                                            data-role-ids="{{ implode(',', $roleIds) }}"
                                                            data-direct-selected="{{ in_array($perm->id, $selectedPermissions) ? '1' : '0' }}"
                                                        >
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
                        @endif
                    </div>
                </div>

                @include('crud::inc.form_save_buttons')
            </form>
        </div>
    </div>
@endsection

@push('after_styles')
    <style>
        .role-chip-group {
            display: flex;
            flex-wrap: wrap;
            gap: .45rem .75rem;
            margin-top: .6rem;
        }

        .role-chip {
            border-radius: 999px;
            padding: .20rem .95rem;
            font-size: .82rem;
            line-height: 1.25;
        }

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

@push('after_scripts')
    <script>
        (function () {
            var roleCheckboxes = document.querySelectorAll('.role-checkbox');
            var permissionsWrapper = document.getElementById('permissions-wrapper');
            var permissionItems = document.querySelectorAll('.permission-item');
            var moduleColumns = document.querySelectorAll('.permission-module-column');

            function selectedRoleIds() {
                return Array.prototype.slice.call(roleCheckboxes)
                    .filter(function (checkbox) {
                        return checkbox.checked;
                    })
                    .map(function (checkbox) {
                        return String(checkbox.value);
                    });
            }

            function itemMatchesRole(item, selectedIds) {
                var roleIds = String(item.dataset.roleIds || '')
                    .split(',')
                    .filter(Boolean);

                return roleIds.some(function (roleId) {
                    return selectedIds.indexOf(roleId) !== -1;
                });
            }

            function updatePermissionsVisibility() {
                if (!permissionsWrapper) return;

                var selectedIds = selectedRoleIds();
                var hasSelectedRole = selectedIds.length > 0;

                permissionsWrapper.classList.toggle('d-none', !hasSelectedRole);

                permissionItems.forEach(function (item) {
                    var isDefaultPermission = hasSelectedRole && itemMatchesRole(item, selectedIds);
                    var checkbox = item.querySelector('.permission-checkbox');

                    item.classList.toggle('d-none', !hasSelectedRole);

                    if (checkbox) {
                        checkbox.disabled = !hasSelectedRole;

                        if (isDefaultPermission) {
                            checkbox.checked = true;
                            checkbox.disabled = true;
                        } else if (hasSelectedRole) {
                            checkbox.checked = item.dataset.directSelected === '1';
                            checkbox.disabled = false;
                        }
                    }
                });

                moduleColumns.forEach(function (column) {
                    column.classList.toggle('d-none', !hasSelectedRole);
                });
            }

            roleCheckboxes.forEach(function (checkbox) {
                checkbox.addEventListener('change', function () {
                    if (checkbox.checked) {
                        roleCheckboxes.forEach(function (otherCheckbox) {
                            if (otherCheckbox !== checkbox) {
                                otherCheckbox.checked = false;
                            }
                        });
                    }

                    updatePermissionsVisibility();
                });
            });

            updatePermissionsVisibility();
        })();
    </script>
@endpush
