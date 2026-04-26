@extends(backpack_view('blank'))

@php
    $defaultBreadcrumbs = [
        trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
        $crud->entity_name_plural => url($crud->route),
        trans('backpack::crud.list') => false,
    ];

    $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;

    $entityIcon = $crud->get('list.icon') ?? \App\Enums\CrudListIcon::Default->value;
    $starterFilters = collect($crud->get('starter.list_filters') ?? []);
@endphp


@section('content')
    <div class="row premium-list" bp-section="crud-operation-list">
        <div class="{{ $crud->getListContentClass() }}">
            <div class="premium-list-card">
                <div class="premium-list-header d-print-none">
                    <div class="premium-list-title-area">
                        <div class="premium-list-icon">
                            <i class="{{ $entityIcon }}"></i>
                        </div>

                        <div>
                            <h2 class="premium-list-title">
                                Lista de {{ $crud->entity_name_plural }}
                            </h2>

                            <div class="premium-list-subtitle">
                                Gerencie os registros cadastrados.
                            </div>
                        </div>
                    </div>
                </div>

                @if ($starterFilters->isNotEmpty())
                    <form id="premium-list-filters" class="premium-list-filters d-print-none">
                        <div class="premium-filter-toolbar">
                            <div class="premium-filter-icon">
                                <i class="la la-filter"></i>
                            </div>

                            @foreach ($starterFilters as $filter)
                                @php
                                    $filterName = $filter['name'];
                                    $filterType = $filter['type'] ?? 'text';
                                    $filterLabel = $filter['label'] ?? $filterName;
                                    $filterValue = request()->input("filters.{$filterName}");
                                    $hasValue = filled($filterValue);

                                    $selectedLabel = null;

                                    if ($filterType === 'select' && $hasValue) {
                                        $selectedLabel = collect($filter['options'] ?? [])->get($filterValue);
                                    }
                                @endphp

                                <div class="premium-filter-dropdown dropdown" data-premium-filter-item>
                                    <button
                                        type="button"
                                        class="premium-filter-trigger {{ $hasValue ? 'is-active' : '' }}"
                                        data-bs-toggle="dropdown"
                                        data-toggle="dropdown"
                                        data-bs-auto-close="outside"
                                        data-default-label="{{ $filterLabel }}"
                                        aria-expanded="false"
                                    >
                                        <span class="premium-filter-trigger-text">
                                            {{ $hasValue && $selectedLabel ? $selectedLabel : $filterLabel }}
                                        </span>

                                        <i class="la la-angle-down"></i>
                                    </button>

                                    <div class="dropdown-menu premium-filter-menu" data-premium-filter-menu>
                                        @if ($filterType === 'select')
                                            <select
                                                id="filter_{{ $filterName }}"
                                                name="filters[{{ $filterName }}]"
                                                class="form-select premium-list-select"
                                                data-placeholder="{{ $filterLabel }}"
                                            >
                                                <option value=""></option>

                                                @foreach (($filter['options'] ?? []) as $optionValue => $optionLabel)
                                                    <option value="{{ $optionValue }}" @selected((string) $filterValue === (string) $optionValue)>
                                                        {{ $optionLabel }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        @else
                                            <input
                                                id="filter_{{ $filterName }}"
                                                type="text"
                                                name="filters[{{ $filterName }}]"
                                                value="{{ $filterValue }}"
                                                class="form-control premium-filter-input"
                                                placeholder="{{ $filter['placeholder'] ?? $filterLabel }}"
                                                autocomplete="off"
                                                @if ($filterType === 'date')
                                                    data-flatpickr
                                                    data-alt-format="d/m/Y"
                                                    data-date-format="Y-m-d"
                                                @endif
                                            >
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                            <button
                                type="button"
                                class="premium-filter-clear {{ request()->has('filters') ? '' : 'd-none' }}"
                                data-clear-premium-filters
                            >
                                <i class="la la-eraser"></i>
                                Limpar
                            </button>
                        </div>
                    </form>
                @endif

                <x-backpack::datatable :controller="$controller" :crud="$crud" :modifiesUrl="true" />
            </div>
        </div>
    </div>
@endsection


@push('after_scripts')
    <script>
        $(document).ready(function () {
            console.log('LIST script via push carregou');
            console.log('jQuery:', typeof window.jQuery);
            console.log('Select2:', typeof $.fn.select2);

            const $form = $('#premium-list-filters');
            const $filterSelects = $form.find('.premium-list-select');

            console.log('Form filtros encontrado:', $form.length);
            console.log('Selects filtros encontrados:', $filterSelects.length);

            if (!$form.length) {
                return;
            }

            let isClearingFilters = false;
            let premiumFilterTypingTimer = null;

            function getCrudTable() {
                if (window.crud && window.crud.tables) {
                    const tableIds = Object.keys(window.crud.tables);

                    if (tableIds.length) {
                        return window.crud.tables[tableIds[0]];
                    }
                }

                const $table = $('.crud-table').first();

                if ($table.length && $.fn.DataTable && $.fn.DataTable.isDataTable($table)) {
                    return $table.DataTable();
                }

                if ($.fn.DataTable && $.fn.DataTable.isDataTable('#crudTable')) {
                    return $('#crudTable').DataTable();
                }

                return null;
            }

            function getFilterValues() {
                const values = [];

                $form.serializeArray().forEach(function (item) {
                    if (item.value !== '') {
                        values.push(item);
                    }
                });

                return values;
            }

            function applyFilterParamsToUrl(baseUrl, preserveCurrentQuery) {
                const url = new URL(baseUrl, window.location.origin);

                if (preserveCurrentQuery) {
                    const currentParams = new URLSearchParams(window.location.search);

                    currentParams.forEach(function (value, key) {
                        if (!key.startsWith('filters[')) {
                            url.searchParams.set(key, value);
                        }
                    });
                }

                Array.from(url.searchParams.keys()).forEach(function (key) {
                    if (key.startsWith('filters[')) {
                        url.searchParams.delete(key);
                    }
                });

                getFilterValues().forEach(function (item) {
                    url.searchParams.set(item.name, item.value);
                });

                return url.toString();
            }

            function cleanUrlFromFilters(baseUrl, preserveCurrentQuery) {
                const url = new URL(baseUrl, window.location.origin);

                if (preserveCurrentQuery) {
                    const currentParams = new URLSearchParams(window.location.search);

                    currentParams.forEach(function (value, key) {
                        if (!key.startsWith('filters[')) {
                            url.searchParams.set(key, value);
                        }
                    });
                }

                Array.from(url.searchParams.keys()).forEach(function (key) {
                    if (key.startsWith('filters[')) {
                        url.searchParams.delete(key);
                    }
                });

                return url.toString();
            }

            function browserUrl() {
                return applyFilterParamsToUrl('{{ url($crud->route) }}', true);
            }

            function ajaxUrl() {
                const table = getCrudTable();
                const currentAjaxUrl = table ? table.ajax.url() : '{{ url($crud->route) }}';

                return applyFilterParamsToUrl(currentAjaxUrl || '{{ url($crud->route) }}', false);
            }

            function hasActiveFilters() {
                if (getFilterValues().length) {
                    return true;
                }

                const params = new URLSearchParams(window.location.search);

                for (const key of params.keys()) {
                    if (key.startsWith('filters[')) {
                        return true;
                    }
                }

                return false;
            }

            function syncClearButton() {
                $('[data-clear-premium-filters]').toggleClass('d-none', !hasActiveFilters());
            }

            function syncFilterTriggers() {
                $('[data-premium-filter-item]').each(function () {
                    const $item = $(this);
                    const $trigger = $item.find('.premium-filter-trigger').first();
                    const $text = $trigger.find('.premium-filter-trigger-text').first();
                    const defaultLabel = $trigger.data('default-label') || $text.text();
                    const $select = $item.find('.premium-list-select').first();
                    const $input = $item.find('.premium-filter-input').first();
                    let label = defaultLabel;
                    let active = false;

                    if ($select.length && $select.val()) {
                        label = $select.find('option:selected').text() || defaultLabel;
                        active = true;
                    } else if ($input.length && $input.val()) {
                        label = $input.val();
                        active = true;
                    }

                    $text.text(label);
                    $trigger.toggleClass('is-active', active);
                });
            }

            function reloadCrudTable(url, tries = 0) {
                const table = getCrudTable();

                if (!table) {
                    if (tries < 10) {
                        setTimeout(function () {
                            reloadCrudTable(url, tries + 1);
                        }, 150);

                        return;
                    }

                    console.warn('DataTable não encontrada. Filtro não aplicado via AJAX.');
                    return;
                }

                table.ajax.url(url).load(null, false);
            }

            function applyFilters() {
                if (isClearingFilters) {
                    return;
                }

                const nextBrowserUrl = browserUrl();
                const nextAjaxUrl = ajaxUrl();

                window.history.pushState({}, '', nextBrowserUrl);

                syncFilterTriggers();
                syncClearButton();
                reloadCrudTable(nextAjaxUrl);
            }

            $filterSelects.each(function () {
                const $select = $(this);
                const $menu = $select.closest('.premium-filter-menu');

                if ($select.hasClass('select2-hidden-accessible')) {
                    $select.select2('destroy');
                }

                $select.select2({
                    theme: 'bootstrap',
                    width: '174px',
                    placeholder: '',
                    allowClear: false,
                    minimumResultsForSearch: 0,
                    dropdownParent: $menu.length ? $menu : $('body')
                });

                $select.next('.select2-container').addClass('premium-filter-select2-control');

                console.log(
                    'Filtro virou Select2:',
                    $select.attr('id'),
                    $select.hasClass('select2-hidden-accessible')
                );

              $select.off('change.premiumFilter').on('change.premiumFilter', function () {
                    if (isClearingFilters) {
                        return;
                    }

                    const $currentSelect = $(this);
                    const $item = $currentSelect.closest('[data-premium-filter-item]');
                    const $trigger = $item.find('.premium-filter-trigger');

                    const value = $currentSelect.val();
                    const selectedLabel = $currentSelect.find('option:selected').text().trim();
                    const defaultLabel = $trigger.data('default-label') || $currentSelect.data('placeholder') || 'Filtro';

                    $trigger
                        .toggleClass('is-active', !!value)
                        .attr('aria-expanded', 'false');

                    $trigger.find('.premium-filter-trigger-text').text(value ? selectedLabel : defaultLabel);

                    $currentSelect.select2('close');

                    const triggerEl = $trigger.get(0);

                    if (window.bootstrap && bootstrap.Dropdown) {
                        const dropdownInstance =
                            bootstrap.Dropdown.getInstance(triggerEl) ||
                            bootstrap.Dropdown.getOrCreateInstance(triggerEl);

                        dropdownInstance.hide();
                    }

                    applyFilters();
                });
            });

            $form
                .off('input.premiumFilterText', '.premium-filter-input[type="text"], .premium-filter-input:not([type])')
                .on('input.premiumFilterText', '.premium-filter-input[type="text"], .premium-filter-input:not([type])', function () {
                    if (isClearingFilters) {
                        return;
                    }

                    clearTimeout(premiumFilterTypingTimer);

                    premiumFilterTypingTimer = setTimeout(function () {
                        syncFilterTriggers();
                        syncClearButton();
                        applyFilters();
                    }, 400);
                });

            $form
                .off('change.premiumFilterDate', '.premium-filter-input[data-flatpickr]')
                .on('change.premiumFilterDate', '.premium-filter-input[data-flatpickr]', function () {
                    applyFilters();
                });

            $(document)
            .off('shown.bs.dropdown.premiumFilter')
            .on('shown.bs.dropdown.premiumFilter', '[data-premium-filter-item]', function () {
                const $item = $(this);
                const $select = $item.find('.premium-list-select');

                if (!$select.length || !$select.hasClass('select2-hidden-accessible')) {
                    return;
                }

                $select.select2('open');

                setTimeout(function () {
                    $('.select2-container--open .select2-search__field').trigger('focus');
                }, 20);
            });

        $(document)
            .off('hidden.bs.dropdown.premiumFilter')
            .on('hidden.bs.dropdown.premiumFilter', '[data-premium-filter-item]', function () {
                const $select = $(this).find('.premium-list-select');

                if ($select.length && $select.hasClass('select2-hidden-accessible')) {
                    $select.select2('close');
                }
            });

            $(document)
                .off('click.premiumFilterMenu')
                .on('click.premiumFilterMenu', '[data-premium-filter-menu]', function (event) {
                    event.stopPropagation();
                });

            $(document)
                .off('click.clearPremiumFilters')
                .on('click.clearPremiumFilters', '[data-clear-premium-filters]', function () {
                    isClearingFilters = true;
                    clearTimeout(premiumFilterTypingTimer);

                    $form.find('input').val('');
                    $form.find('.premium-list-select').val(null).trigger('change.select2');

                    isClearingFilters = false;

                    localStorage.removeItem('{{ Str::slug($crud->getRoute()) }}_list_url');
                    localStorage.removeItem('{{ Str::slug($crud->getRoute()) }}_list_url_time');
                    localStorage.removeItem('DataTables_crudTable_/{{ $crud->getRoute() }}');

                    const cleanBrowserUrl = cleanUrlFromFilters('{{ url($crud->route) }}', true);
                    const table = getCrudTable();
                    const currentAjaxUrl = table ? table.ajax.url() : '{{ url($crud->route) }}';
                    const cleanAjaxUrl = cleanUrlFromFilters(currentAjaxUrl || '{{ url($crud->route) }}', false);

                    window.history.pushState({}, '', cleanBrowserUrl);

                    syncFilterTriggers();
                    syncClearButton();
                    reloadCrudTable(cleanAjaxUrl);
                });

            syncFilterTriggers();
            syncClearButton();
        });
    </script>
@endpush
