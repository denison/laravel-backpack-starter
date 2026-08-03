FROM php:8.4-fpm

# set your user name, ex: user=carlos
ARG user=denison
ARG uid=1000

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libicu-dev \
    libjpeg62-turbo-dev \
    libzip-dev \
    libpng-dev \
    libwebp-dev \
    libonig-dev \
    libxml2-dev \
    supervisor \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-configure gd --with-jpeg --with-webp \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd sockets zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Install redis
RUN pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis

# Set working directory
WORKDIR /var/www

# Copy custom configurations PHP
COPY docker/php/custom.ini /usr/local/etc/php/conf.d/custom.ini

# Supervisor configs
COPY docker/supervisor/supervisord.conf /etc/supervisor/supervisord.conf
COPY docker/supervisor/horizon.conf /etc/supervisor/conf.d/horizon.conf
COPY docker/supervisor/reverb.conf /etc/supervisor/conf.d/reverb.conf

# --- NOVO: copiar o código para dentro da imagem (para uso no perfil prod) ---
USER root
# copia tudo; se preferir, crie um .dockerignore para não levar node_modules, etc.
COPY . /var/www
# garante dono certo (se quiser manter $user como owner e grupo www-data)
RUN chown -R $user:www-data /var/www
USER $user

# --- NOVO: entrypoint ---
# Copia o script que automatiza composer + permissões + cache + migrações
COPY docker/entrypoint.sh /entrypoint.sh
USER root
RUN chmod +x /entrypoint.sh
USER $user

ENTRYPOINT ["/entrypoint.sh"]
CMD ["php-fpm"]
