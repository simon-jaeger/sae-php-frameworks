# sae: php frameworks

duration: 11 * 3h

learn about mvc, rest and the laravel framework.

## demo project: blog

```bash
# install dependencies
composer install

# start server
composer run-script serve

# (re-)create database
composer run-script seed
```

## outline

- intro
- goal: backend for an office suite (like microsoft or google)
- mvc: what and why?
- os package manager
    - macos: https://brew.sh/
    - windows: https://scoop.sh/
- php cli
- composer
- laravel: install starter, artisan serve
- ...
- api: what are headless backends?
- routing (GET /ping)
- api client: https://insomnia.rest/
- controllers
- endpoints (VERB /controller/method)
- http request body (params)
- http response (return value)
- T: create more meta endpoints (echo, reverse, whoami, ...)
- ...
- models
- migrations
- crud (restful controller methods)
- T: create more crudable entities (contacts, todos, events, ...)
- ...
- seeding/faker
- validation
- T: add seeding and validation to your entities
- ...
- auth
- middleware
- relationships
- T: add relationships to your entities and enforce auth
- ...
- computed (follower and likes count etc.)
- query strings (filtering, sorting, ...)
- pagination
- ...
- file system and uploads
- services (Util.php etc.)
- ...
- T: add more features and ask questions
- T: present your project to the class
