<?php

namespace App\Traits;

use App\Enums\CreateSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait HasCreateSections
{
    protected function prepareCreateSections(): void
    {
        $this->crud->setOperationSetting(
            'createSections',
            $this->buildFormSections('create')
        );
    }

    protected function prepareUpdateSections(): void
    {
        $this->crud->setOperationSetting(
            'updateSections',
            $this->buildFormSections('update')
        );
    }

    protected function buildFormSections(string $operation): array
    {
        $entry = $operation === 'update'
            ? $this->crud->getCurrentEntry()
            : null;

        $fields = collect($this->crud->getFields())
            ->map(fn (array $field) => $this->normalizeCreateFieldWrapper($field))
            ->map(fn (array $field) => $this->hydrateFieldValueForUpdate($field, $entry));

        $fieldsBySection = $fields->groupBy(function (array $field) {
            return CreateSection::fromField($field['section'] ?? null)->value;
        });

        return collect(CreateSection::cases())
            ->sortBy(fn (CreateSection $section) => $section->order())
            ->map(function (CreateSection $section) use ($fieldsBySection) {
                $fields = $fieldsBySection->get($section->value, collect());

                return [
                    'key' => $section->value,
                    'title' => $section->title(),
                    'description' => $section->description(),
                    'icon' => $section->icon(),
                    'fields' => $fields,
                ];
            })
            ->filter(fn (array $section) => $section['fields']->isNotEmpty())
            ->values()
            ->toArray();
    }

    protected function hydrateFieldValueForUpdate(array $field, ?Model $entry): array
    {
        if (! $entry) {
            return $field;
        }

        if (array_key_exists('value', $field)) {
            return $field;
        }

        $name = $field['name'] ?? null;

        if (! $name) {
            return $field;
        }

        $type = $field['type'] ?? null;

        if (
            in_array($type, ['relationship', 'select2_multiple'], true)
            && ! empty($field['entity'])
            && method_exists($entry, $field['entity'])
        ) {
            $relation = $entry->{$field['entity']};

            if ($relation instanceof Collection) {
                $field['value'] = $relation
                    ->map(fn ($model) => $model->getKey())
                    ->values()
                    ->toArray();

                return $field;
            }

            if ($relation instanceof Model) {
                $field['value'] = $relation->getKey();

                return $field;
            }
        }

        $field['value'] = old($name, data_get($entry, $name));

        return $field;
    }

    protected function normalizeCreateFieldWrapper(array $field): array
    {
        if (! empty($field['wrapper']['class'])) {
            return $field;
        }

        $type = $field['type'] ?? 'text';

        $fullWidthTypes = [
            'textarea',
            'summernote',
            'ckeditor',
            'tinymce',
            'wysiwyg',
            'repeatable',
            'table',
            'upload',
            'upload_multiple',
            'starter_image_upload',
            'browse',
            'browse_multiple',
        ];

        if (in_array($type, $fullWidthTypes, true)) {
            $field['wrapper']['class'] = 'form-group col-md-12';

            return $field;
        }

        $field['wrapper']['class'] = 'form-group col-md-6';

        return $field;
    }
}
