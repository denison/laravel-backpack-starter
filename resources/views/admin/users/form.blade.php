{{-- resources/views/admin/users/form.blade.php --}}
@extends('admin.crud.form-template')

@section('starter_form_fields')
    @php
        $entry = $entry ?? $crud->getCurrentEntry();

        $operation = $crud->getOperation();
        $action = $operation === 'update' ? 'edit' : 'create';

        $sections = $operation === 'update'
            ? ($crud->getOperationSetting('updateSections') ?? [])
            : ($crud->getOperationSetting('createSections') ?? []);

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

            [$rawBlock, $permissionAction] = array_pad(explode('.', $name, 2), 2, '');

            $block = strtolower($rawBlock ?: 'blocks');

            $config = trans("permission-blocks.$block");

            if (is_array($config)) {
                $blockLabel = $config['plural'] ?? $config['singular'] ?? ucfirst($block);
            } else {
                $blockLabel = ucfirst(str_replace('_', ' ', $block));
            }

            $groupedPermissions[$blockLabel][] = [
                'model' => $permission,
                'action' => $permissionAction,
            ];
        }
    @endphp

    @include('admin.crud.partials.form-sections', [
        'sections' => $sections,
        'action' => $action,
        'entry' => $entry,
        'id' => $id ?? 'crudForm',
    ])

    @if ($rolesList->count())
        @component('admin.components.form-section', [
            'key' => 'user-access',
            'icon' => 'la la-user-lock',
            'title' => 'Acesso do usuário',
            'description' => 'Selecione o grupo principal e ajuste permissões extras quando necessário.',
        ])
            <div class="user-access-block">
                <div class="user-access-group">
                    <label class="starter-inner-label">
                        Grupo de acesso <span class="text-danger">*</span>
                    </label>

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

                @if (! empty($groupedPermissions))
                    <div id="permissions-wrapper" class="user-access-permissions d-none">
                        <div class="user-access-permissions-header">
                            <label class="starter-inner-label mb-0">
                                Permissões extras
                            </label>

                            <small class="text-muted fw-bold">
                                O padrão do grupo fica marcado e travado; permissões extras ficam livres para marcar.
                            </small>
                        </div>

                        <div class="row permission-modules-grid">
                            @foreach ($groupedPermissions as $blockLabel => $items)
                                <div class="col-12 col-md-6 mb-3 permission-module-column d-none">
                                    <div class="permission-module card h-100">
                                        <div class="permission-module-header">
                                            <span class="permission-module-title">
                                                {{ $blockLabel }}
                                            </span>
                                        </div>

                                        <div class="permission-module-actions">
                                            @foreach ($items as $item)
                                                @php
                                                    $perm = $item['model'];
                                                    $permissionAction = $item['action'];
                                                    $actionLabel = $perm->display_name ?: ucfirst(str_replace('_', ' ', $permissionAction));
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

                                                    <label
                                                        class="form-check-label permission-action-label"
                                                        for="permission_{{ $perm->id }}"
                                                    >
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
        @endcomponent
    @endif
@endsection

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