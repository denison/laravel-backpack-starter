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
- Spatie Media Library para anexos e imagens
- Filtros customizados para `ListOperation`, sem depender do Backpack Pro

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

4. Gere a chave da aplicacao:

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

## Documentacao

- [Docker e ambiente local](docs/docker.md)
- [Arquitetura do projeto](docs/architecture.md)
- [Backpack e CRUDs](docs/backpack.md)
- [Filtros customizados](docs/filters.md)
- [Permissoes](docs/permissions.md)
- [Uploads e Media Library](docs/media-library.md)
- [Qualidade de codigo](docs/quality.md)

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

## Convencoes Principais

- CRUDs administrativos seguem o corte `CrudController -> Service -> RepositoryInterface -> Repository -> Model`.
- Permissoes usam `name` tecnico em ingles e `display_name` amigavel em portugues.
- Usuarios devem ter uma role principal; permissoes fora da role podem ser extras.
- O visual global da listagem fica em `resources/views/vendor/backpack/crud/list.blade.php`.
- O CSS customizado do admin fica em `resources/css/backpack`.
- As cores do admin devem ser alteradas em `resources/css/backpack/theme.css`.
- Icones de listagem devem ser definidos em `app/Enums/CrudListIcon.php`.
- Filtros de listagem devem usar `app/Traits/HasCrudListFilters.php`.
- Uploads usam Spatie Media Library com path padronizado por projeto, model, collection e ID.
