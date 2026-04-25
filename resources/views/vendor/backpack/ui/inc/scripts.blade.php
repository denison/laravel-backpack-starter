<script src="https://www.unpkg.com/jquery@3.6.1/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://www.unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
{{-- <script src="https://www.unpkg.com/noty@3.2.0-beta-deprecated/lib/noty.min.js'"></script> --}}
<script src="https://unpkg.com/noty@3.2.0-beta/lib/noty.min.js"></script>
<script src="https://www.unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/pt.js"></script>

{{-- @basset('https://unpkg.com/jquery@3.6.1/dist/jquery.min.js') --}}
{{-- @basset('https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js')
@basset('https://unpkg.com/noty@3.2.0-beta-deprecated/lib/noty.min.js')
@basset('https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js') --}}

@if (backpack_theme_config('scripts') && count(backpack_theme_config('scripts')))
    @foreach (backpack_theme_config('scripts') as $path)
        @if(is_array($path))
            @basset(...$path)
        @else
            @basset($path)
        @endif
    @endforeach
@endif

@if (backpack_theme_config('mix_scripts') && count(backpack_theme_config('mix_scripts')))
    @foreach (backpack_theme_config('mix_scripts') as $path => $manifest)
        <script type="text/javascript" src="{{ mix($path, $manifest) }}"></script>
    @endforeach
@endif

@if (backpack_theme_config('vite_scripts') && count(backpack_theme_config('vite_scripts')))
    @vite(backpack_theme_config('vite_scripts'))
@endif

@include(backpack_view('inc.alerts'))

@if(config('app.debug'))
    @include('crud::inc.ajax_error_frame')
@endif

@push('after_scripts')
    @basset(base_path('vendor/backpack/crud/src/resources/assets/js/common.js'))
@endpush

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (!window.flatpickr) return;

        document.querySelectorAll('[data-flatpickr]').forEach(function(el) {
            flatpickr(el, {
                locale: 'pt',
                altInput: true,
                altFormat: el.dataset.altFormat || 'd/m/Y',
                dateFormat: el.dataset.dateFormat || 'Y-m-d',
                enableTime: false,
                allowInput: true
            });
        });

        document.querySelectorAll('[data-flatpickr-time]').forEach(function(el) {
            flatpickr(el, {
                locale: 'pt',
                enableTime: true,
                noCalendar: true,
                time_24hr: true,
                dateFormat: el.dataset.dateFormat || 'H:i',
                allowInput: true
            });
        });
    });
</script>
