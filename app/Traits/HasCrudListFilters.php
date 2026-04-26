<?php

namespace App\Traits;

trait HasCrudListFilters
{
    protected function addCrudListFilter(array $filter): void
    {
        $filter = array_merge([
            'type' => 'text',
            'column' => $filter['name'] ?? null,
            'operator' => 'like',
            'options' => [],
        ], $filter);

        $filters = $this->crud->get('starter.list_filters') ?? [];
        $filters[] = $filter;

        $this->crud->set('starter.list_filters', $filters);
    }

    protected function applyCrudListFilters(): void
    {
        foreach ($this->crud->get('starter.list_filters') ?? [] as $filter) {
            $name = $filter['name'] ?? null;

            if (! $name) {
                continue;
            }

            $value = request()->input("filters.{$name}");

            if ($value === null || $value === '') {
                continue;
            }

            if (($filter['query'] ?? null) instanceof \Closure) {
                $filter['query']($this->crud, $value);

                continue;
            }

            $column = $filter['column'] ?? $name;
            $operator = $filter['operator'] ?? 'like';

            if (($filter['type'] ?? null) === 'date') {
                $this->crud->addClause('whereDate', $column, $value);

                continue;
            }

            if ($operator === 'like') {
                $this->crud->addClause('where', $column, 'like', "%{$value}%");

                continue;
            }

            $this->crud->addClause('where', $column, $operator, $value);
        }
    }
}
