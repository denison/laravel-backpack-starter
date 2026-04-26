# Backups

Este starter foi preparado para usar Spatie Laravel Backup.

## Pacote

Pacote planejado:

```text
spatie/laravel-backup
```

O pacote exige a extensao PHP `zip`. Por isso o Dockerfile do starter usa PHP 8.4 e instala:

```text
libzip-dev
ext-zip
```

## Instalacao

Depois de rebuildar o container com PHP 8.4, instale o pacote:

```bash
docker compose exec app-dev composer require spatie/laravel-backup
```

Depois publique a configuracao:

```bash
docker compose exec app-dev php artisan vendor:publish --provider="Spatie\Backup\BackupServiceProvider"
```

## O que o Backup Deve Cobrir

Para projetos baseados neste starter, o backup deve cobrir:

- banco de dados
- arquivos enviados para `storage/app/public`
- arquivos da Media Library quando estiverem no disco local

Quando o projeto usar DigitalOcean Spaces/S3 para media, avalie se os arquivos precisam de backup separado ou se a retencao do provedor ja cobre o caso.

## Retencao

Comece simples:

- manter backups diarios recentes
- apagar backups antigos automaticamente
- documentar onde o backup esta sendo salvo

Evite manter backup infinito no mesmo servidor da aplicacao.

## Scheduler

O backup deve rodar pelo scheduler do Laravel.

Exemplo futuro:

```php
Schedule::command('backup:run')->dailyAt('02:00');
Schedule::command('backup:clean')->dailyAt('03:00');
```

Esse ajuste deve ser fechado junto da documentacao de scheduler/deploy.
