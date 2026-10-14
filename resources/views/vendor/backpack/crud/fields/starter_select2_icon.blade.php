@php
    $field['allows_null'] = $field['allows_null'] ?? $crud->model::isColumnNullable($field['name']);
    $field['value'] = old_empty_or_null($field['name'], '') ?? $field['value'] ?? $field['default'] ?? '';
    $field['multiple'] = $field['allows_multiple'] ?? $field['multiple'] ?? false;
    $field['icon'] = $field['icon'] ?? 'la la-list';
    $inputId = 'starter-select-'.str_replace(['[', ']'], '-', $field['name']);
@endphp

@include('crud::fields.inc.wrapper_start')
    <label for="{{ $inputId }}">{!! $field['label'] !!}</label>
    @include('crud::fields.inc.translatable_icon')

    @if ($field['multiple'])
        <input type="hidden" name="{{ $field['name'] }}" value="" @disabled(in_array('disabled', $field['attributes'] ?? []))>
    @endif

    <div class="starter-select-shell {{ $field['multiple'] ? 'starter-select-shell-multiple' : '' }}" data-select2-cloak>
        <i class="{{ $field['icon'] }} starter-select-shell-icon" aria-hidden="true"></i>
        <select
            id="{{ $inputId }}"
            name="{{ $field['name'] }}@if ($field['multiple'])[]@endif"
            @include('crud::fields.inc.attributes', ['default_class' => 'form-control form-select starter-select2'])
            @if ($field['multiple']) multiple bp-field-main-input @endif
        >
            @if ($field['allows_null'] && ! $field['multiple'])
                <option value="">{{ $field['placeholder'] ?? 'Selecione...' }}</option>
            @endif

            @foreach ($field['options'] as $key => $value)
                <option value="{{ $key }}" @selected($key == $field['value'] || (is_array($field['value']) && in_array($key, $field['value'])))>
                    {{ $value }}
                </option>
            @endforeach
        </select>
    </div>

    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
@include('crud::fields.inc.wrapper_end')
