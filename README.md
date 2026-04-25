# Laravel Backpack Starter

Projeto base para novos sistemas com Laravel 12, Backpack 7, Docker, Redis, Horizon, Supervisor e Reverb.

## Stack

- Laravel 12
- Backpack 7
- Tema Backpack Tabler
- Layout `horizontal_overlap`
- Skin `backpack-color-palette`
- Docker com PHP-FPM, Nginx, MySQL e Redis
- Horizon, Supervisor e Reverb preparados
- Spatie Permission com telas customizadas no Backpack

## Primeiro Acesso

Este projeto deve ser usado via Docker. Nada precisa ser instalado fora do container.

1. Copie o `.env`:

```bash
cp .env.example .env
```

2. Suba o ambiente de desenvolvimento:

```bash
docker compose --profile dev up -d --build
```

3. Instale as dependencias PHP dentro do container:

```bash
docker compose exec app-dev composer install
```

4. Gere a chave da aplicação:

```bash
docker compose exec app-dev php artisan key:generate
```

5. Rode migrations e seeders:

```bash
docker compose exec app-dev php artisan migrate --seed
```

6. Prepare os assets/storage do Backpack:

```bash
docker compose exec app-dev php artisan storage:link
docker compose exec app-dev php artisan basset:cache
```

7. Limpe os caches:

```bash
docker compose exec app-dev php artisan optimize:clear
```

Acesse:

```text
http://localhost:8989/admin
```

## Comandos Uteis

Subir o ambiente:

```bash
docker compose --profile dev up -d
```

Derrubar o ambiente:

```bash
docker compose --profile dev down
```

Entrar no container:

```bash
docker compose exec app-dev bash
```

Limpar cache depois de alterar config, view ou traducao:

```bash
docker compose exec app-dev php artisan optimize:clear
```

## Backpack

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

## Permissoes

Este starter usa Spatie Permission integrado ao Backpack.

Padrao das permissoes:

- `name`: nome tecnico em ingles, usado no codigo. Exemplo: `processes.create`
- `display_name`: nome amigavel em portugues, exibido no painel. Exemplo: `Criar processos`

Padrao das roles:

- cada usuario deve ter apenas uma role
- a role define o acesso principal do usuario
- permissoes da role aparecem marcadas e travadas no formulario de usuario
- permissoes fora da role aparecem desmarcadas e podem ser marcadas como extras

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

## Desenvolvimento

O list de usuarios mostra apenas:

- nome
- email
- grupo

As telas de create/edit de `Users`, `Roles` e `Permissions` foram customizadas em:

```text
resources/views/admin/users/form.blade.php
resources/views/admin/roles/form.blade.php
resources/views/admin/permissions/form.blade.php
```

Os controllers ficam em:

```text
app/Http/Controllers/Admin/UserCrudController.php
app/Http/Controllers/Admin/RoleCrudController.php
app/Http/Controllers/Admin/PermissionCrudController.php
```

## Docker

Ambiente local:

```text
http://localhost:8989
```

MySQL local exposto em:

```text
localhost:3388
```

Redis roda dentro da rede Docker com host:

```text
redis
```

Os dados locais do MySQL ficam em:

```text
.docker/mysql/dbdata
```

Essa pasta nao deve ser versionada.
