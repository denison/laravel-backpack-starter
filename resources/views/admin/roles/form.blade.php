{{-- resources/views/admin/roles/form.blade.php --}}
@extends('admin.crud.form-template')

@section('starter_form_fields')
    @php
        $entry = $entry ?? $crud->getCurrentEntry();

        $operation = $crud->getOperation();
        $action = $operation === 'update' ? 'edit' : 'create';

        $sections = $operation === 'update'
            ? ($crud->getOperationSetting('updateSections') ?? [])
            : ($crud->getOperationSetting('createSections') ?? []);

        $permissionsList = $permissionsList ?? collect();

        $selectedPermissions = (array) old(
            'permissions',
            $entry ? $entry->permissions->pluck('id')->toArray() : []
        );

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
    
   
    @if (! empty($groupedPermissions))
        @component('admin.components.form-section', [
            'key' => 'permissions',
            'icon' => 'la la-user-lock',
            'title' => 'Permissões',
            'description' => 'Ative as ações desejadas para este perfil de acesso.',
        ])
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
                                        $perm = $item['model'];
                                        $permissionAction = $item['action'];

                                        $actionLabel = $perm->display_name
                                            ?? ucfirst(str_replace('_', ' ', $permissionAction));
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
        @endcomponent
    @endif

@endsection