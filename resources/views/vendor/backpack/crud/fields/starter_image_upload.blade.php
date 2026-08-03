@php
    $field['wrapper'] = $field['wrapper'] ?? [];
    $collection = $field['collection'] ?? $field['name'];
    $removeField = 'remove_'.$collection;
    $mediaEntry = is_object($entry ?? null) ? $entry : null;
    $currentUrl = $mediaEntry && method_exists($mediaEntry, 'getFirstMediaUrl')
        ? ($mediaEntry->getFirstMediaUrl($collection, 'thumb') ?: null)
        : null;
    $entryKey = $mediaEntry && method_exists($mediaEntry, 'getKey')
        ? $mediaEntry->getKey()
        : 'new';
    $inputId = 'starter-media-'.str_replace(['[', ']'], '-', $field['name']).'-'.$entryKey;
@endphp

@include('crud::fields.inc.wrapper_start')
    <label for="{{ $inputId }}">{{ $field['label'] }}</label>

    <div class="starter-media-upload starter-media-upload-{{ $collection }}" data-current-url="{{ $currentUrl }}">
        <input
            id="{{ $inputId }}"
            class="starter-media-upload-input"
            type="file"
            name="{{ $field['name'] }}"
            accept="image/jpeg,image/png,image/webp"
        >
        <input class="starter-media-remove-input" type="hidden" name="{{ $removeField }}" value="0">

        <div class="starter-media-dropzone" tabindex="0" role="button" aria-label="Selecionar {{ mb_strtolower($field['label']) }}">
            <div class="starter-media-preview {{ $currentUrl ? 'has-image' : '' }}">
                <img src="{{ $currentUrl ?: '' }}" alt="Pré-visualização de {{ mb_strtolower($field['label']) }}" @if (! $currentUrl) hidden @endif>
                <span class="starter-media-placeholder" @if ($currentUrl) hidden @endif>
                    <i class="la la-image"></i>
                </span>
            </div>

            <div class="starter-media-copy">
                <strong>Arraste a imagem aqui</strong>
                <span>ou clique para selecionar</span>
                <small>{{ $field['hint'] ?? 'JPG, PNG ou WebP.' }}</small>
            </div>
        </div>

        <div class="starter-media-actions">
            <button type="button" class="btn btn-sm btn-outline-primary starter-media-select">
                <i class="la la-folder-open"></i> Escolher imagem
            </button>
            <button type="button" class="btn btn-sm btn-outline-danger starter-media-remove" @if (! $currentUrl) hidden @endif>
                <i class="la la-trash"></i> Remover
            </button>
        </div>
    </div>

    @error($field['name'])
        <div class="text-danger small mt-2">{{ $message }}</div>
    @enderror
@include('crud::fields.inc.wrapper_end')
