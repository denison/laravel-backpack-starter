@if (! empty($sections))
    <div class="starter-form-sections">
        @foreach ($sections as $section)
            <section class="starter-form-section starter-form-section-{{ $section['key'] }}">
                <div class="starter-form-section-aside">
                    <span class="starter-form-section-icon">
                        <i class="{{ $section['icon'] }}"></i>
                    </span>

                    <div>
                        <h3>{{ $section['title'] }}</h3>

                        @if (! empty($section['description']))
                            <p>{{ $section['description'] }}</p>
                        @endif
                    </div>
                </div>

                <div class="starter-form-section-content">
                    <div class="row">
                        @foreach ($section['fields'] as $field)
                            @php
                                $fieldView = $crud->getFirstFieldView(
                                    $field['type'],
                                    $field['view_namespace'] ?? false
                                );

                                $fieldName = $field['name'] ?? null;

                                if (($action ?? null) === 'edit' && $fieldName && ! array_key_exists('value', $field)) {
                                    $field['value'] = old($fieldName, data_get($entry, $fieldName));
                                }
                            @endphp

                            @include($fieldView, [
                                'field' => $field,
                                'crud' => $crud,
                                'entry' => $entry ?? null,
                                'action' => $action,
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
            'action' => $action,
            'id' => $id ?? 'crudForm'
        ])
    @else
        @include('crud::form_content', [
            'fields' => $crud->fields(),
            'action' => $action,
            'id' => $id ?? 'crudForm'
        ])
    @endif
@endif