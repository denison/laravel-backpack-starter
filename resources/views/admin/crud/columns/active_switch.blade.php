@php
    $active = (bool) data_get($entry, $column['name']);
    $statusUrl = value($column['status_url'] ?? null, $entry);
    $canToggle = value($column['can_toggle'] ?? true, $entry);
    $activeLabel = $column['active_label'] ?? 'Ativo';
    $inactiveLabel = $column['inactive_label'] ?? 'Inativo';
    $switchId = 'active-switch-'.$entry->getKey().'-'.md5($statusUrl);
@endphp

<div class="d-inline-flex align-items-center gap-2" data-order="{{ $active ? 1 : 0 }}">
    <div class="form-check form-switch m-0">
        <input
            id="{{ $switchId }}"
            class="form-check-input starter-active-switch"
            type="checkbox"
            role="switch"
            data-status-url="{{ $statusUrl }}"
            data-active-label="{{ $activeLabel }}"
            data-inactive-label="{{ $inactiveLabel }}"
            @checked($active)
            @disabled(! $canToggle)
            aria-label="Alterar status de {{ $entry->name }}"
            title="{{ $canToggle ? 'Clique para alterar o status' : 'Este status não pode ser alterado por você' }}"
        >
    </div>

    <span class="starter-active-switch-label {{ $active ? 'is-active' : 'is-inactive' }}">
        {{ $active ? $activeLabel : $inactiveLabel }}
    </span>
</div>
