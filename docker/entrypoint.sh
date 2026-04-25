#!/usr/bin/env bash
set -e

cd /var/www

echo "[entrypoint] Iniciando container…"

if [ -f "composer.json" ]; then
  if [ ! -f "vendor/autoload.php" ]; then
    echo "[entrypoint] vendor/autoload.php não encontrado -> composer install"
    composer install --no-interaction --prefer-dist --optimize-autoloader
  else
    echo "[entrypoint] vendor já presente -> pulando composer install"
  fi
else
  echo "[entrypoint] composer.json não encontrado em /var/www -> pulando composer"
fi

# 2) APP_KEY (gera se estiver vazio)
if [ -z "${APP_KEY}" ] || [ "${APP_KEY}" = "" ]; then
  echo "[entrypoint] APP_KEY vazio -> php artisan key:generate"
  php artisan key:generate --force || true
fi

# 3) storage:link se faltar
if [ ! -L "public/storage" ]; then
  echo "[entrypoint] Criando storage:link"
  php artisan storage:link || true
fi

# 4) Permissões mínimas (sem 777)
echo "[entrypoint] Ajustando permissões de escrita em storage/ e bootstrap/cache/"
chmod -R ug+rwX storage bootstrap/cache || true

# 5) (Opcional) Migrações automáticas (controlado por RUN_MIGRATIONS)
if [ "${RUN_MIGRATIONS:-true}" = "true" ]; then
  echo "[entrypoint] php artisan migrate --force"
  php artisan migrate --force || true
else
  echo "[entrypoint] Migrações desabilitadas por RUN_MIGRATIONS=false"
fi

# 6) Caches de performance (não quebram boot se falhar)
php artisan config:cache  || true
php artisan route:clear   || true
php artisan view:cache    || true

echo "[entrypoint] Pronto. Subindo php-fpm…"
echo "[entrypoint] Iniciando supervisord (Horizon)…"
supervisord -c /etc/supervisor/supervisord.conf &
exec "$@"
