# sae: php frameworks

duration: 11 * 3h (maybe more, request from martin)

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
- php cli
- composer
- os package manager (if php 8.1/composer missing)
    - macos: https://brew.sh/
    - windows: https://scoop.sh/
- software architecture: what and why?
- api: what are headless backends? (https://jsonplaceholder.typicode.com)
- api client: https://insomnia.rest/
- laravel: a php framework
- T: install everything, setup starter project
- ........................................
- routing (GET /meta/ping)
- endpoints (VERB /controller/method)
- controllers
- http request body (params)
- http response (return value)
- E: meta controller (ping, echo)
- T: create more meta endpoints (reverse, sum, ...)
- ........................................
- sqlite (https://marketplace.visualstudio.com/items?itemName=qwtel.sqlite-viewer)
- models (properties + make, save, create, all, find, delete, ...)
- migrations
- artisan (php artisan migrate:fresh)
- crud (restful controller methods)
- E: notes (crud)
- T: add more fields to the note entity (string $color, boolean $hidden, integer $importance, ...)
- T: create more crudable entities (contacts, recipes, ...)
- ........................................
- seeding/faker
- headers (X-Requested-With, ...)
- http codes (200, 403, 404, 500, ...) (abort, findOrFail, ...)
- validation
- E: notes (seed, validate)
- T: add seeding and validation to your entities
- ........................................
- users
- auth
- middleware
- relationships
- E: users, auth, $user->notes()
- T: add relationships to your entities and enforce auth
- ........................................
- query strings (filtering, sorting, searching, ...)
- E: tasks
- T: add filtering, sorting and searching to your entities
- ........................................
- file system and uploads
- route params
- file response
- E: pictures
- T: create more media entitites (music, video, zips, fonts, ...)
- ........................................
- admin user and impersonation
- helpers, collections, datetime/carbon, mail, ...
- services (Util.php etc.)
- ........................................
- T: add a blog feature (public articles and comments)
- T: add more features and ask questions
- T: present your project to the class

## extra tasks

- #1: add a color field to notes (hex notation). if request has no color input, set a random gray color.
- #2: add a summary field  to notes. automatically set it to the first 10 characters of the content followed by three dots (...) when a note is created
- #3: add a locked field to notes. when trying to delete a note where locked is true, do not delete it and instead return a message 'cannot delete locked note'

