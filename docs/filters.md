# Filtros Customizados

O starter tem uma base propria de filtros para `ListOperation`, sem depender do Backpack Pro.

## Trait

```text
app/Traits/HasCrudListFilters.php
```

Uso no controller:

```php
use HasCrudListFilters;
```

## Exemplo

Exemplo no `setupListOperation()`:

```php
$this->addCrudListFilter([
    'name' => 'role',
    'label' => 'Grupo',
    'type' => 'select',
    'options' => $roles,
    'query' => function ($crud, $value) {
        $crud->addClause('whereHas', 'roles', function ($query) use ($value) {
            $query->where('roles.id', $value);
        });
    },
]);

$this->applyCrudListFilters();
```

## Tipos Suportados

```text
text
select
date
```

O tipo `date` usa o Flatpickr global do sistema com tema Airbnb, configurado em:

```text
resources/views/vendor/backpack/ui/inc/styles.blade.php
resources/views/vendor/backpack/ui/inc/scripts.blade.php
```

O input e renderizado com `data-flatpickr`, formato visual `d/m/Y` e valor enviado como `Y-m-d`.

## Comportamento

O `list.blade.php` global renderiza a barra de filtros automaticamente quando o CRUD declara filtros com `addCrudListFilter()`.

Se nenhum filtro for declarado, a barra nao aparece.

Os filtros funcionam com AJAX na DataTable e podem ser usados em qualquer CRUD do sistema.

## CSS

O CSS dos filtros fica isolado em:

```text
resources/css/backpack/filters.css
```

As cores usadas pelos filtros devem vir das variaveis globais em:

```text
resources/css/backpack/theme.css
```

Nao colocar CSS dos filtros diretamente em `resources/views/vendor/backpack/crud/list.blade.php`.
