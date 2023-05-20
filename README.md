# sae: php frameworks

learn about mvc, rest and the laravel framework.

## demo project: blog

```bash
# install dependencies
composer install
```

```bash
# start server
php artisan serve
```

```bash
# (re-)create database
touch database/database.sqlite
php artisan migrate:fresh --seed
```

## outline

- os package manager
    - macos: https://brew.sh/
    - windows: https://scoop.sh/
- php cli
- composer
- mvc: what and why?
- laravel: install starter, artisan serve
- api: what are headless backends?
- routing (GET /ping)
- api client: https://insomnia.rest/
- controllers
- endpoints (VERB /controller/method)
- http request body (params)
- http response (return value)
- models
- migrations
- crud (restful controller methods)
- seeding/faker
- auth
- middleware
- validation
- query strings (filtering, sorting, ...)
- pagination
- file system and uploads
