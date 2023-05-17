# laravel

```bash
# first time setup
composer install
cp .env.example .env
php artisan key:generate
```

```bash
# start server
php artisan serve
```

```bash
# (re-)create database
php artisan migrate:fresh
```

```bash
# (re-)create ide intellisense helpers
php artisan ide-helper:generate
php artisan ide-helper:meta
php artisan ide-helper:models --write-mixin
```

