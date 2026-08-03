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
        $roleGroups = collect([
            'platform' => [
                'label' => 'Plataforma',
                'description' => 'Usuários internos responsáveis pela operação da plataforma.',
                'icon' => 'la la-cloud',
                'roles' => $rolesList->reject(fn ($role) => str_starts_with($role->name, 'tenant_')),
            ],
            'tenant' => [
                'label' => 'Empresas',
                'description' => 'Usuários que pertencem a uma empresa cliente.',
                'icon' => 'la la-building',
                'roles' => $rolesList->filter(fn ($role) => str_starts_with($role->name, 'tenant_')),
            ],
        ])->filter(fn ($group) => $group['roles']->isNotEmpty());

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

                    <div class="role-scope-grid">
                        @foreach ($roleGroups as $scope => $group)
                            <div class="role-scope-card role-scope-card-{{ $scope }}">
                                <div class="role-scope-header">
                                    <i class="{{ $group['icon'] }}"></i>
                                    <div>
                                        <strong>{{ $group['label'] }}</strong>
                                        <small>{{ $group['description'] }}</small>
                                    </div>
                                </div>

                                <div class="role-chip-group">
                                    @foreach ($group['roles'] as $role)
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
                                            data-tenant-role="{{ $scope === 'tenant' ? '1' : '0' }}"
                                            {{ $isChecked ? 'checked' : '' }}
                                        >

                                        <label class="btn btn-sm role-chip" for="{{ $htmlId }}">
                                            {{ $roleLabel }}
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                @if (! empty($groupedPermissions))
                    <div id="permissions-wrapper" class="user-access-permissions d-none">
                        <div class="user-access-permissions-header">
                            <label class="starter-inner-label mb-0">
                                Permissões extras
                            </label>
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

                                        <small class="permission-module-help">
                                            O padrão do grupo fica marcado e travado; permissões extras ficam livres para marcar.
                                        </small>

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
                                                    data-platform-only="{{ \App\Support\PermissionScope::isPlatformOnly($perm->name) ? '1' : '0' }}"
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
            var tenantFieldWrapper = document.getElementById('tenant-field-wrapper');
            var tenantField = tenantFieldWrapper ? tenantFieldWrapper.querySelector('[name="tenant_id"]') : null;
            var tenantSection = tenantFieldWrapper ? tenantFieldWrapper.closest('.starter-form-section-relations') : null;

            function updateTenantField() {
                if (!tenantFieldWrapper) return;

                var selectedRole = document.querySelector('.role-checkbox:checked');
                var isTenantRole = selectedRole && selectedRole.dataset.tenantRole === '1';

                if (tenantSection) {
                    tenantSection.classList.toggle('d-none', !isTenantRole);
                } else {
                    tenantFieldWrapper.classList.toggle('d-none', !isTenantRole);
                }

                if (tenantField) {
                    tenantField.required = Boolean(isTenantRole);

                    if (!isTenantRole) {
                        tenantField.value = '';
                        tenantField.dispatchEvent(new Event('change'));
                    }
                }
            }

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
                var selectedRole = document.querySelector('.role-checkbox:checked');
                var hasSelectedRole = selectedIds.length > 0;
                var isTenantRole = hasSelectedRole && selectedRole.dataset.tenantRole === '1';
                var visibleItems = 0;

                permissionItems.forEach(function (item) {
                    var isDefaultPermission = hasSelectedRole && itemMatchesRole(item, selectedIds);
                    var isAllowedPermission = !isTenantRole || item.dataset.platformOnly !== '1';
                    var checkbox = item.querySelector('.permission-checkbox');

                    item.classList.toggle('d-none', !hasSelectedRole || !isAllowedPermission);

                    if (hasSelectedRole && isAllowedPermission) {
                        visibleItems++;
                    }

                    if (checkbox) {
                        checkbox.disabled = !hasSelectedRole || !isAllowedPermission;

                        if (isAllowedPermission && isDefaultPermission) {
                            checkbox.checked = true;
                            checkbox.disabled = true;
                        } else if (hasSelectedRole && isAllowedPermission) {
                            checkbox.checked = item.dataset.directSelected === '1';
                            checkbox.disabled = false;
                        }
                    }
                });

                moduleColumns.forEach(function (column) {
                    var hasVisibleItem = column.querySelector('.permission-item:not(.d-none)');
                    column.classList.toggle('d-none', !hasVisibleItem);
                });

                permissionsWrapper.classList.toggle('d-none', !hasSelectedRole || visibleItems === 0);
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
                    updateTenantField();
                });
            });

            updatePermissionsVisibility();
            updateTenantField();
        })();
    </script>
@endpush
