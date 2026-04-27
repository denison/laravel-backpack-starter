@props([
    'key' => 'custom',
    'icon' => 'la la-layer-group',
    'title' => null,
    'description' => null,
])

<div class="starter-form-sections">
    <section class="starter-form-section starter-form-section-{{ $key }}">
        <div class="starter-form-section-aside">
            <span class="starter-form-section-icon">
                <i class="{{ $icon }}"></i>
            </span>

            <div>
                @if ($title)
                    <h3>{{ $title }}</h3>
                @endif

                @if ($description)
                    <p>{{ $description }}</p>
                @endif
            </div>
        </div>

        <div class="starter-form-section-content">
            {{ $slot }}
        </div>
    </section>
</div>