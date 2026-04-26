# Docker e Ambiente Local

Este projeto deve ser usado via Docker. Nada precisa ser instalado fora do container.

Imagem PHP base:

```text
php:8.4-fpm
```

Extensoes PHP relevantes:

```text
pdo_mysql
mbstring
exif
pcntl
bcmath
gd
sockets
zip
redis
```

## Enderecos

Ambiente local:

```text
http://localhost:8989
```

Painel admin:

```text
http://localhost:8989/admin
```

MySQL local exposto em:

```text
localhost:3388
```

Redis roda dentro da rede Docker com host:

```text
redis
```

## Comandos

Subir o ambiente:

```bash
docker compose --profile dev up -d
```

Subir o ambiente reconstruindo imagens:

```bash
docker compose --profile dev up -d --build
```

Derrubar o ambiente:

```bash
docker compose --profile dev down
```

Entrar no container:

```bash
docker compose exec app-dev bash
```

Instalar dependencias PHP:

```bash
docker compose exec app-dev composer install
```

Gerar chave da aplicacao:

```bash
docker compose exec app-dev php artisan key:generate
```

Rodar migrations e seeders:

```bash
docker compose exec app-dev php artisan migrate --seed
```

Limpar cache depois de alterar config, view ou traducao:

```bash
docker compose exec app-dev php artisan optimize:clear
```

## Dados Locais

Os dados locais do MySQL ficam em:

```text
.docker/mysql/dbdata
```

Essa pasta nao deve ser versionada.
