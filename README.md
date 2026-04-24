# Laravel Backpack Starter

Projeto base para novos sistemas com Laravel 12 e Backpack 7.

## Stack inicial

- Laravel 12
- Backpack 7
- Tema Backpack Tabler
- Layout `horizontal_overlap`
- Skin `backpack-color-palette`

## Setup local

Depois de clonar/criar um projeto novo a partir desta base:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
```

## Backpack / Tabler

O Backpack usa o Basset para servir os assets do painel admin. Ele salva os arquivos em:

```text
storage/app/public/basset
```

Por isso, em todo projeto novo, rode:

```bash
php artisan storage:link
php artisan basset:cache
```

Se esse passo faltar, o `/admin` abre com HTML basico, sem CSS/JS do Tabler.

Para testar:

```bash
php artisan serve
```

Acesse:

```text
http://127.0.0.1:8000/admin
```
