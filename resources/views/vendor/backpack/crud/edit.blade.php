@extends(backpack_view('blank'))

<style>
/* ==========================================================================
   Starter Create/Edit Operation
   ========================================================================== */

.starter-create {
    width: 100%;
    margin-top: 0;
    padding: 0 1.75rem 2.5rem;
}

.starter-create > .col-md-12,
.starter-create > [class*="col-"] {
    width: 100%;
    max-width: 100%;
    flex: 0 0 100%;
    padding: 0;
}

.starter-create-surface {
    width: 100%;
    background: var(--starter-card);
    color: var(--starter-ink);
    border: 1px solid var(--starter-line);
    border-radius: 22px;
    box-shadow: var(--starter-shadow);
    padding: 30px 30px 18px;
    overflow: hidden;
}

.starter-create-intro {
    display: flex;
    align-items: center;
    gap: 18px;
    padding-bottom: 24px;
    margin-bottom: 0;
    border-bottom: 1px solid var(--starter-line);
}

.starter-create-intro-icon {
    width: 56px;
    height: 56px;
    border-radius: 14px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 auto;
    background: var(--starter-accent-soft);
    border: 1px solid var(--starter-accent-line);
    color: var(--starter-accent);
    font-size: 28px;
}

.starter-create-intro-content {
    flex: 1;
    min-width: 0;
}

.starter-create-intro-content h2 {
    margin: 0;
    color: var(--starter-ink);
    font-size: 25px;
    line-height: 1.2;
    font-weight: 700;
    letter-spacing: -0.03em;
}

.starter-create-intro-content p {
    margin: 6px 0 0;
    color: var(--starter-muted);
    font-size: 14px;
}

.starter-create-back {
    height: 42px;
    padding: 0 17px;
    border-radius: 12px;
    border: 1px solid var(--starter-line);
    background: var(--starter-card);
    color: var(--starter-accent-text);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    box-shadow: var(--starter-shadow-soft);
}

.starter-create-back:hover {
    background: var(--starter-accent-soft);
    border-color: var(--starter-accent-line);
    color: var(--starter-accent-text);
    text-decoration: none;
}

.starter-create-sections {
    width: 100%;
}

.starter-create-section {
    display: grid;
    grid-template-columns: 250px minmax(0, 1fr);
    column-gap: 34px;
    padding: 25px 0;
    border-bottom: 1px solid var(--starter-line);
}

.starter-create-section-aside {
    display: grid;
    grid-template-columns: 42px minmax(0, 1fr);
    align-items: flex-start;
    column-gap: 14px;
}

.starter-create-section-icon {
    width: 42px;
    height: 42px;
    border-radius: 999px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: var(--starter-accent-soft);
    border: 1px solid var(--starter-accent-line);
    color: var(--starter-accent);
    font-size: 20px;
}

.starter-create-section-aside h3 {
    margin: 1px 0 0;
    color: var(--starter-ink);
    font-size: 17px;
    line-height: 1.25;
    font-weight: 700;
    letter-spacing: -0.02em;
}

.starter-create-section-aside p {
    margin: 8px 0 0;
    color: var(--starter-muted);
    font-size: 14px;
    line-height: 1.45;
    max-width: 190px;
}

.starter-create-section-content {
    min-width: 0;
}

.starter-create-section-content > .row {
    --bs-gutter-x: 24px;
    --bs-gutter-y: 19px;
    row-gap: 19px;
}

.starter-create-section-content .form-group {
    margin-bottom: 0 !important;
}

.starter-create-section-details .starter-create-section-content > .row > .form-group,
.starter-create-section-custom .starter-create-section-content > .row > .form-group {
    width: 100%;
}

.starter-create-section-content label,
.starter-create-section-content .form-label {
    margin-bottom: 8px;
    color: var(--starter-ink);
    font-size: 13px;
    line-height: 1.2;
    font-weight: 700;
}

.starter-create-section-content .required,
.starter-create-section-content .text-danger {
    color: var(--starter-danger) !important;
}

.starter-create-section-content .help-block,
.starter-create-section-content .form-text,
.starter-create-section-content small.text-muted {
    display: block;
    margin-top: 7px;
    color: var(--starter-muted) !important;
    font-size: 13px;
    line-height: 1.35;
}

.starter-create-section-content .form-control,
.starter-create-section-content .form-select,
.starter-create-section-content select,
.starter-create-section-content textarea {
    min-height: 42px;
    border-radius: 10px;
    border: 1px solid var(--starter-line);
    background-color: var(--starter-input);
    color: var(--starter-input-text);
    box-shadow: none;
    font-size: 14px;
    transition: border-color .15s ease, box-shadow .15s ease, background-color .15s ease;
}

.starter-create-section-content textarea.form-control,
.starter-create-section-content textarea {
    min-height: 88px;
    resize: vertical;
}

.starter-create-section-content .form-control::placeholder,
.starter-create-section-content textarea::placeholder {
    color: var(--starter-placeholder);
}

.starter-create-section-content .form-control:focus,
.starter-create-section-content .form-select:focus,
.starter-create-section-content select:focus,
.starter-create-section-content textarea:focus {
    border-color: var(--starter-accent-line);
    box-shadow: 0 0 0 4px var(--starter-accent-focus);
    background-color: var(--starter-input);
    color: var(--starter-input-text);
}

.starter-create .select2-container--bootstrap .select2-selection,
.starter-create .select2-container--bootstrap-5 .select2-selection,
.starter-create .select2-container .select2-selection--single,
.starter-create .select2-container .select2-selection--multiple {
    min-height: 42px;
    border-radius: 10px;
    border-color: var(--starter-line);
    background-color: var(--starter-input);
    color: var(--starter-input-text);
    box-shadow: none;
}

.starter-create .select2-container--bootstrap .select2-selection--single .select2-selection__rendered,
.starter-create .select2-container--bootstrap-5 .select2-selection--single .select2-selection__rendered,
.starter-create .select2-container .select2-selection--single .select2-selection__rendered {
    line-height: 40px;
    padding-left: 12px;
    color: var(--starter-input-text);
}

.starter-create .select2-container--focus .select2-selection,
.starter-create .select2-container--open .select2-selection {
    border-color: var(--starter-accent-line) !important;
    box-shadow: 0 0 0 4px var(--starter-accent-focus) !important;
}

.starter-create-section-custom .starter-create-section-content {
    padding: 16px;
    border-radius: 14px;
    background: linear-gradient(135deg, rgba(var(--starter-system-primary-rgb), .055), rgba(var(--starter-system-primary-rgb), .02));
    border: 1px solid var(--starter-line-soft);
}

.starter-create-actions {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 12px;
    padding-top: 20px;
}

.starter-create-actions .btn {
    min-height: 42px;
    border-radius: 11px;
    padding: 0 18px;
    font-weight: 700;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.starter-create-actions .btn-success {
    background: linear-gradient(135deg, var(--starter-accent), var(--starter-accent-2)) !important;
    border-color: transparent !important;
    color: var(--starter-on-accent) !important;
    box-shadow: 0 14px 28px var(--starter-accent-shadow);
}

.starter-create-actions .btn-success:hover,
.starter-create-actions .btn-success:focus {
    filter: brightness(.98);
    box-shadow: 0 16px 34px var(--starter-accent-shadow-strong);
}

.starter-create-actions .btn-secondary,
.starter-create-actions .btn-default {
    background: var(--starter-card) !important;
    color: var(--starter-ink) !important;
    border: 1px solid var(--starter-line) !important;
    box-shadow: var(--starter-button-shadow);
}

.starter-create-actions .dropdown-toggle-split {
    padding-left: 12px;
    padding-right: 12px;
}

.starter-create-header-spacer {
    min-height: 8px;
    margin: 0 !important;
    padding: 0 !important;
}

body[bp-layout=horizontal-overlap] .starter-create {
    margin-top: 0;
}

html[data-bs-theme="dark"] .starter-create-surface,
html[data-theme="dark"] .starter-create-surface,
html.dark .starter-create-surface,
body[data-bs-theme="dark"] .starter-create-surface,
body[data-theme="dark"] .starter-create-surface,
body.theme-dark .starter-create-surface,
body.dark .starter-create-surface,
body.dark-mode .starter-create-surface {
    background: var(--starter-card);
    border-color: var(--starter-line);
}

@media (max-width: 991px) {
    .starter-create {
        padding-inline: 1rem;
    }

    .starter-create-surface {
        padding: 22px;
        border-radius: 18px;
    }

    .starter-create-intro {
        align-items: flex-start;
        flex-wrap: wrap;
    }

    .starter-create-back {
        width: 100%;
        justify-content: center;
    }

    .starter-create-section {
        grid-template-columns: 1fr;
        row-gap: 18px;
    }

    .starter-create-section-aside p {
        max-width: none;
    }

    .starter-create-section-content > .row > .form-group:not([class*="col-"]),
    .starter-create-section-content > .row > div:not([class*="col-"]) {
        width: 100%;
    }
}
</style>

@php
  $defaultBreadcrumbs = [
    trans('backpack::crud.admin') => backpack_url('dashboard'),
    $crud->entity_name_plural => url($crud->route),
    trans('backpack::crud.edit') => false,
  ];

  $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;
@endphp

@section('header')
    <section
        class="header-operation container-fluid animated fadeIn d-print-none starter-create-header-spacer"
        bp-section="page-header"
    ></section>
@endsection

@section('content')
@php
 	$formSections = $crud->getOperationSetting('updateSections') ?? [];

    $formIcon = $crud->getOperationSetting('crudIcon') ?? 'la la-edit';
@endphp

<div class="starter-create starter-edit" bp-section="crud-operation-update">
    <div class="{{ $crud->getEditContentClass() }}">

        @include('crud::inc.grouped_errors', ['id' => $id ?? 'crudForm'])

        <form method="post"
              action="{{ url($crud->route.'/'.$entry->getKey()) }}"
              id="{{ $id ?? 'crudForm' }}"
              @if ($crud->hasUploadFields('update', $entry->getKey()))
                  enctype="multipart/form-data"
              @endif
        >
            {!! csrf_field() !!}
            {!! method_field('PUT') !!}
            <input
                type="hidden"
                name="{{ $crud->model->getKeyName() }}"
                value="{{ $entry->getKey() }}"
            >

            <div class="starter-create-surface">

                <div class="starter-create-intro">
                    <div class="starter-create-intro-icon">
                        <i class="{{ $formIcon }}"></i>
                    </div>

                    <div class="starter-create-intro-content">
                        <h2>
                            {{ trans('backpack::crud.edit') }} {{ $crud->entity_name }}
                        </h2>

                        <p>
                            Atualize as informações abaixo para manter este cadastro em dia.
                        </p>
                    </div>

                    @if ($crud->hasAccess('list'))
                        <a href="{{ url($crud->route) }}" class="starter-create-back">
                            <i class="la la-arrow-left"></i>
                            <span>Voltar para todos</span>
                        </a>
                    @endif
                </div>

                @includeWhen($crud->model->translationEnabled(), 'crud::inc.edit_translation_notice')

                @if (! empty($formSections))
                    <div class="starter-create-sections">
                        @foreach ($formSections as $section)
    <section class="starter-create-section starter-create-section-{{ $section['key'] }}">
        <div class="starter-create-section-aside">
            <span class="starter-create-section-icon">
                <i class="{{ $section['icon'] }}"></i>
            </span>

            <div>
                <h3>{{ $section['title'] }}</h3>

                @if (! empty($section['description']))
                    <p>{{ $section['description'] }}</p>
                @endif
            </div>
        </div>

        <div class="starter-create-section-content">
            <div class="row">
                @foreach ($section['fields'] as $field)
                    @php
                        $fieldView = $crud->getFirstFieldView(
                            $field['type'],
                            $field['view_namespace'] ?? false
                        );

                        $fieldName = $field['name'] ?? null;

                        if ($fieldName && ! array_key_exists('value', $field)) {
                            $field['value'] = old($fieldName, data_get($entry, $fieldName));
                        }
                    @endphp

                    @include($fieldView, [
                        'field' => $field,
                        'crud' => $crud,
                        'entry' => $entry,
                        'action' => 'edit',
                        'id' => $id ?? 'crudForm',
                    ])
                @endforeach
            </div>
        </div>
    </section>
@endforeach
                    </div>
                @else
                    @if(view()->exists('vendor.backpack.crud.form_content'))
                        @include('vendor.backpack.crud.form_content', [
                            'fields' => $crud->fields(),
                            'action' => 'edit',
                            'id' => $id ?? 'crudForm'
                        ])
                    @else
                        @include('crud::form_content', [
                            'fields' => $crud->fields(),
                            'action' => 'edit',
                            'id' => $id ?? 'crudForm'
                        ])
                    @endif
                @endif

                <div class="d-none" id="parentLoadedAssets">{{ json_encode(Basset::loaded()) }}</div>

                <div class="starter-create-actions">
                    @include('crud::inc.form_save_buttons')
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
