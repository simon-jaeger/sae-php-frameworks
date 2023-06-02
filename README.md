# sae: php frameworks

duration: 11 * 3h

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
- goal: backend for an office suite (like microsoft or google)
- mvc: what and why?
- os package manager
    - macos: https://brew.sh/
    - windows: https://scoop.sh/
- php cli
- composer
- laravel
- T: install everything, setup starter project
- ........................................
- api: what are headless backends?
- routing (GET /ping)
- api client: https://insomnia.rest/
- controllers
- endpoints (VERB /controller/method)
- http request body (params)
- http response (return value)
- E: meta controller
- T: create more meta endpoints (echo, reverse, whoami, ...)
- ........................................
- sqlite
- models
- migrations
- crud (restful controller methods)
- E: notes (crud)
- T: create more crudable entities (contacts, recipes, pokemon, ...)
- ........................................
- seeding/faker
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
- query strings (filtering, sorting, ...)
- ?pagination
- E: tasks
- T: add filtering and sorting to your entities
- ........................................
- file system and uploads
- E: pictures
- T: create more media entitites (music, video, zips, fonts, ...)
- ........................................
- helpers, collections, datetime/carbon
- services (Util.php etc.)
- ........................................
- T: add more features and ask questions
- T: present your project to the class

