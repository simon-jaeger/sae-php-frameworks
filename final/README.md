# sae: php frameworks

duration: 13 * 3h

learn about mvc, rest and the laravel framework.

## demo project

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
- bash: using the terminal and shell
- php cli
- composer
- os package manager (if php 8.1/composer missing)
    - macos: https://brew.sh/
    - windows: https://scoop.sh/
- ........................................
- software architecture: what and why?
- laravel: a php framework
- T: install everything, setup starter project
- tinker: the php repl
- oop: geometry (Rectangle.php, Circle.php, ...)
- oop: text adventure (Hero.php, Enemy.php, ...)
- ........................................
- api: what are headless backends? (https://jsonplaceholder.typicode.com)
- api client: https://insomnia.rest/
- routing (GET /meta/ping)
- endpoints (VERB /controller/method)
- controllers
- http request body (params)
- http response (return value)
- E: meta controller (ping, echo)
- T: create more meta endpoints (reverse, sum, ...)
- ........................................
- sqlite (https://marketplace.visualstudio.com/items?itemName=qwtel.sqlite-viewer)
- models (properties + make, save, create, get, find, delete, ...)
- migrations
- scripts (composer run-script seed)
- crud (restful controller methods)
- E: notes (crud)
- T: add another field to the note entity (string $color)
- T: create your own crudable entity (contacts, recipes, ...)
- ........................................
- seeding/faker
- http codes (200, 404, 500, ...) (abort, findOrFail, ...)
- validation
- E: notes (seed, validate)
- T: add seeding and validation to your entities
- ........................................
- users
- auth
- middleware
- relationships (1:n) and foreign keys
- E: users, auth, $user->notes()
- T: add relationships to your entities and enforce auth
- ........................................
- query strings (filtering, sorting, searching, ...)
- E: tasks
- T: add filtering, sorting and searching to your entities
- ........................................
- relationships (n:m) and pivot tables
- tags
- T: tags entity
- E: blongsToMany, attach, detach, sync, ...
- ........................................
- route parameters
- file system and uploads
- file response
- E: pictures
- T: create more media entitites (song, video, pdf, ...)
- ........................................
- admin user and impersonation
- E: admin controller
- T: add more admin features (number of users etc.)
- ........................................
- static helper classes (Str, Arr, Carbon, ...)
- custom helpers
- E: Color.php
- T: read about the built-in helpers and build your own

