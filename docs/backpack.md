# Backpack e CRUDs

Este starter usa Backpack 7 com tema Tabler, layout `vertical_transparent` e skin `backpack-color-palette`.

Para o passo a passo de criacao de novos CRUDs, veja:

```text
docs/crud-pattern.md
```

## Basset

O Backpack usa o Basset para servir os assets do painel admin. Ele salva os arquivos em:

```text
storage/app/public/basset
```

Se o `/app` abrir quebrado, com HTML basico e sem CSS/JS, rode:

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
resources/css/backpack/select2.css
resources/css/backpack/vertical-sidebar.css
resources/css/backpack/company-context.css
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
- `select2.css`: shell reutilizável do Select2, incluindo ícone interno, seleção múltipla, dropdown e dark mode.
- `vertical-sidebar.css`: estrutura compartilhada dos layouts verticais; suas cores e largura vêm dos tokens de `theme.css`.
- `company-context.css`: composição específica do seletor da empresa ativa no header.

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

### Sidebar vertical

Os layouts `vertical`, `vertical_dark`, `vertical_transparent` e seus equivalentes à direita reutilizam a classe `starter-sidebar`. Não replique o componente para trocar sua identidade visual: personalize em `theme.css` os tokens:

```css
--starter-sidebar-width
--starter-sidebar-bg
--starter-sidebar-hover
--starter-sidebar-active
--starter-sidebar-card
--starter-sidebar-text
--starter-sidebar-text-muted
--starter-sidebar-icon-soft
```

No desktop, a estrutura usa a altura completa da viewport, mantém a marca no topo, o menu com rolagem própria e a ajuda no rodapé. A ajuda fica fora da lista semântica do menu e aparece somente para usuários vinculados a uma empresa (`tenant_id` preenchido).

### Contexto de empresa

O painel separa dois espaços sob o prefixo configurável do Backpack:

- `/app`: contexto global da plataforma;
- `/app/company`: contexto da empresa ativa.

Usuários da plataforma entram em uma empresa pela ação da listagem e mantêm seu identificador somente na sessão. Dentro de `/app/company`, o Select2 do header permite trocar entre empresas ativas ou voltar para a plataforma. Usuários vinculados a uma empresa não usam sessão para escolher tenant: o contexto sempre vem de `users.tenant_id` e o header mostra apenas o nome da empresa.

O backend valida o contexto com `EnsureCompanyContext`. A listagem global `/app/user` contém apenas usuários da plataforma, enquanto `/app/company/user` aplica o tenant atual no Repository e protege registros individuais pela Policy.

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
