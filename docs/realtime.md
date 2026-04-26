# Realtime com Reverb

Este starter possui um exemplo funcional de realtime no painel admin.

Fluxo:

```text
Comando Artisan
    -> Evento de dominio
    -> Listener em fila
    -> Evento broadcast
    -> Fila Redis/Horizon
    -> Reverb
    -> Echo
    -> Noty no Backpack
```

## Arquivos

Evento de dominio:

```text
app/Events/AdminNotificationRequested.php
```

Listener:

```text
app/Listeners/BroadcastAdminRealtimeNotification.php
```

Evento broadcast:

```text
app/Events/AdminRealtimeNotification.php
```

Comando:

```text
routes/console.php
```

Frontend:

```text
resources/js/bootstrap.js
```

Config do Horizon:

```text
config/horizon.php
```

Registro do listener:

```text
app/Providers/EventServiceProvider.php
bootstrap/providers.php
```

## Canal

Canal publico usado pelo exemplo:

```text
admin.notifications
```

Evento no frontend:

```text
.admin.notification
```

## Filas

O listener implementa `ShouldQueue` e roda na fila:

```text
default
```

O evento broadcast implementa `ShouldBroadcast` e usa a fila:

```text
broadcasts
```

O Horizon foi configurado para consumir:

```php
'queue' => ['default', 'broadcasts'],
```

## Teste Manual

Com o painel admin aberto no navegador, rode:

```bash
docker compose exec app-dev php artisan admin:notify "Mensagem realtime de teste"
```

Com titulo e tipo:

```bash
docker compose exec app-dev php artisan admin:notify "Registro processado com sucesso" --title="Processos" --type=success
```

Tipos comuns do Noty:

```text
success
info
warning
error
```

## Build Frontend

Depois de alterar o JavaScript:

```bash
npm run build
```

Em desenvolvimento, se estiver usando Vite dev server:

```bash
npm run dev
```

## Variaveis

As variaveis ficam no `.env`:

```env
BROADCAST_CONNECTION=reverb
QUEUE_CONNECTION=redis

REVERB_APP_ID=local
REVERB_APP_KEY=local
REVERB_APP_SECRET=local
REVERB_HOST=localhost
REVERB_PORT=8080
REVERB_SCHEME=http

VITE_REVERB_APP_KEY="${REVERB_APP_KEY}"
VITE_REVERB_HOST="${REVERB_HOST}"
VITE_REVERB_PORT="${REVERB_PORT}"
VITE_REVERB_SCHEME="${REVERB_SCHEME}"
```

## Observacao

Este exemplo e propositalmente simples e publico para facilitar testes no starter.

Em funcionalidades reais, avalie usar canais privados, regras em `routes/channels.php` e permissoes por usuario.
