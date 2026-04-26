# Backpack e CRUDs

Este starter usa Backpack 7 com tema Tabler, layout `horizontal_overlap` e skin `backpack-color-palette`.

Para o passo a passo de criacao de novos CRUDs, veja:

```text
docs/crud-pattern.md
```

## Basset

O Backpack usa o Basset para servir os assets do painel admin. Ele salva os arquivos em:

```text
storage/app/public/basset
```

Se o `/admin` abrir quebrado, com HTML basico e sem CSS/JS, rode:

```bash
docker compose exec app-dev php artisan storage:link
docker compose exec app-dev php artisan basset:cache
docker compose exec app-dev php artisan optimize:clear
```

## CSS do Admin

Os estilos customizados do starter ficam em:

```text
resources/css/backpack/theme.css
resources/css/backpack/list.css
resources/css/backpack/filters.css
resources/css/backpack/show.css
```

Esses arquivos sao carregados pelo Backpack em:

```text
config/backpack/theme-tabler.php
```

Regra principal:

- `theme.css`: variaveis globais de cor, sombra e estados visuais.
- `list.css`: estrutura visual da `ListOperation`.
- `filters.css`: visual dos filtros customizados e Select2 dentro dos filtros.
- `show.css`: visual da tela de visualizar/show.

Evite colocar CSS direto nas views sobrescritas do Backpack. Quando uma cor precisar mudar, altere primeiro as variaveis em `theme.css`.

### Tema Backpack/Tabler

O `theme.css` tambem sobrescreve variaveis principais do Tabler usadas pelo Backpack:

```css
--tblr-primary
--tblr-tabler
--tblr-primary-rgb
--tblr-link-color
--tblr-primary-bg-subtle
--tblr-primary-border-subtle
```

A faixa superior do layout `horizontal_overlap` usa:

```css
--starter-overlap-bg
--starter-overlap-text
--starter-overlap-muted
```

Para trocar a cor principal do painel inteiro, comece por:

```css
--starter-system-primary
--starter-system-primary-rgb
--starter-overlap-bg
```

## Controllers Administrativos

Os controllers principais ficam em:

```text
app/Http/Controllers/Admin/UserCrudController.php
app/Http/Controllers/Admin/RoleCrudController.php
app/Http/Controllers/Admin/PermissionCrudController.php
```

## Forms Customizados

As telas de create/edit de `Users`, `Roles` e `Permissions` foram customizadas em:

```text
resources/views/admin/users/form.blade.php
resources/views/admin/roles/form.blade.php
resources/views/admin/permissions/form.blade.php
```

## ListOperation

O visual global da listagem fica em:

```text
resources/views/vendor/backpack/crud/list.blade.php
```

O `list` de usuarios mostra apenas:

- nome
- email
- grupo

## Icones de Entidades

Os icones das entidades devem ser definidos por enum, nao direto no Blade:

```text
app/Enums/CrudListIcon.php
```

Uso no `setupListOperation()`:

```php
$this->crud->set('list.icon', CrudListIcon::Users->value);
```

Padrao atual:

```php
CrudListIcon::Default
CrudListIcon::Users
CrudListIcon::Roles
CrudListIcon::Permissions
```
