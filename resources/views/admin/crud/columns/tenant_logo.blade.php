@php
    $logoUrl = $entry->logoUrl();
@endphp

<div class="starter-tenant-logo" aria-label="Logo de {{ $entry->name }}">
    @if ($logoUrl)
        <img src="{{ $logoUrl }}" alt="Logo de {{ $entry->name }}" loading="lazy">
    @else
        <span aria-hidden="true"><i class="la la-building"></i></span>
    @endif
</div>
