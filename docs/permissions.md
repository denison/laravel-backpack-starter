# Permissoes

Este starter usa Spatie Permission integrado ao Backpack.

## Padrao das Permissoes

- `name`: nome tecnico em ingles, usado no codigo. Exemplo: `processes.create`.
- `display_name`: nome amigavel em portugues, exibido no painel. Exemplo: `Criar processos`.

## Padrao das Roles

- Cada usuario deve ter apenas uma role.
- A role define o acesso principal do usuario.
- Permissoes da role aparecem marcadas e travadas no formulario de usuario.
- Permissoes fora da role aparecem desmarcadas e podem ser marcadas como extras.

Roles iniciais:

- `super`: perfil tecnico/plataforma. Recebe todas as permissoes cadastradas.
- `manager`: gestor da plataforma. Administra usuarios, empresas e logs.
- `administrative`: administrativo da plataforma. Comeca com acesso as empresas.
- `tenant_admin`: gestor da empresa. Administra usuarios da propria empresa.
- `tenant_administrative`: administrativo da empresa. Comeca sem permissoes.

Usuarios iniciais sao criados pelo seeder:

```text
database/seeders/AdminUserSeeder.php
```

As variaveis de ambiente sao lidas em:

```text
config/starter.php
```

Variaveis do `.env`:

```env
SEED_SUPER_NAME="Super Admin"
SEED_SUPER_EMAIL=super@example.com
SEED_SUPER_PASSWORD=password

SEED_MANAGER_NAME="Platform Manager"
SEED_MANAGER_EMAIL=manager@example.com
SEED_MANAGER_PASSWORD=password
```

Em producao, troque esses valores antes de rodar os seeders.

## Traducoes dos Blocos

As traducoes dos blocos de permissao ficam em:

```text
lang/pt-BR/permission-blocks.php
```

Exemplo:

```php
'users' => [
    'singular' => 'Usuario',
    'plural' => 'Usuarios',
],
```

## Middleware de Permissao

No Laravel 13, aliases de middleware sao registrados em `bootstrap/app.php`, dentro de `withMiddleware()`. Nao existe `app/Http/Kernel.php` por padrao como nos projetos Laravel antigos.

Alias atual:

```php
'check.permission' => \App\Http\Middleware\CheckPermissionFromRoute::class,
```

Uso padrao nos CRUDs:

```php
$this->applyCrudRoutePermissions('users');
$this->applyCrudUiPermissions('users');
```

Arquivos base:

```text
app/Http/Middleware/CheckPermissionFromRoute.php
app/Traits/HasCrudRoutePermissions.php
app/Traits/HasCrudUiPermissions.php
```
