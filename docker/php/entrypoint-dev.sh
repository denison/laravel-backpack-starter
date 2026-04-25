#!/bin/bash

# Este entrypoint é para o ambiente de desenvolvimento e NÃO aplica cache de otimização.

# 1) Instala o Composer (se não estiver na imagem)
# composer install || true

# 2) Aguarda o banco de dados (se aplicável)
# sleep 5 

# 3) Roda migrações e seeders (apenas se for necessário para DEV)
php artisan migrate --force || true

# 4) Ajusta permissões (essencial para o bind mount no Docker)
echo "[entrypoint-dev] Ajustando permissões de escrita em storage/ e bootstrap/cache/"
chmod -R ug+rwX storage bootstrap/cache || true

echo "[entrypoint-dev] Iniciando php-fpm..."
echo "[entrypoint-dev] Iniciando supervisord (Horizon)…"
supervisord -c /etc/supervisor/supervisord.conf &
exec "$@" # Inicia o CMD php-fpm