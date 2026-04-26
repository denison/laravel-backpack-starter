# Activitylog e Auditoria

Este starter usa Spatie Laravel Activitylog para registrar auditoria de acoes importantes.

## Objetivo

Activitylog deve responder perguntas como:

- Quem criou um registro?
- Quem editou?
- Quem deletou?
- Quando aconteceu?
- Quais campos mudaram?
- Qual model foi afetado?

## Instalacao

Pacote:

```text
spatie/laravel-activitylog
```

Arquivos publicados:

```text
config/activitylog.php
database/migrations/*_create_activity_log_table.php
database/migrations/*_add_event_column_to_activity_log_table.php
database/migrations/*_add_batch_uuid_column_to_activity_log_table.php
```

## Configuracao

Variaveis principais:

```env
ACTIVITY_LOGGER_ENABLED=true
ACTIVITY_LOGGER_RETENTION_DAYS=90
```

Retencao dos logs:

```php
'delete_records_older_than_days' => env('ACTIVITY_LOGGER_RETENTION_DAYS', 90),
```

## Migration

Depois de publicar as migrations, rode:

```bash
docker compose exec app-dev php artisan migrate
```

## Limpeza de Logs Antigos

Para apagar logs mais antigos que a retencao configurada:

```bash
docker compose exec app-dev php artisan activitylog:clean
```

Esse comando deve entrar no scheduler quando o deploy/scheduler for documentado.

## Permissao

Permissao criada no seeder:

```text
activity_logs.access
```

Ela deve ser usada para proteger a tela de consulta dos logs.

## Tela Backpack

O starter possui uma tela somente leitura para consultar logs:

```text
app/Http/Controllers/Admin/ActivityLogCrudController.php
```

Rota:

```text
/admin/activity-log
```

Arquivo de rota:

```text
routes/backpack/custom.php
```

Menu:

```text
resources/views/vendor/backpack/ui/inc/menu_items.blade.php
```

A tela permite listar e visualizar logs. Criar, editar e deletar ficam desabilitados.

## Regra de Uso

Nao logar tudo por padrao.

Use Activitylog nos models importantes do projeto, principalmente entidades administrativas e dados sensiveis para auditoria.

Evite logar:

- senha
- tokens
- campos temporarios
- payloads grandes
- dados que mudam com muita frequencia e nao ajudam em auditoria

Ao configurar models, prefira:

- registrar apenas `created`, `updated`, `deleted`
- registrar apenas campos alterados
- ignorar atributos sensiveis
- manter retencao curta no inicio, como 90 dias
