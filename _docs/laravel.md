# laravel

a framework for web backends.

- predefined file and folder structure
- predefined classes that solve common problems
    - router (direct http requests)
    - Utilities (Str::rev() etc.)
    - database access
    - file upload, download, storage
    - authentification
    - ...
- helper scripts (running a dev server, filling the db with dummy data, ...)
- debug helper (better error handling, logging, ...)
- automatic security (cors, xss, sql injection, ...)

## router

handle http requests, delegate to controllers

## controller

implement logic for endpoints

(GET /notes --> NotesController::read())

## model

object oriented abstraction over database and sql.
persistency via save() method (or automatically on create())

## migrations

php scripts that create db tables.
easily recreate database, even on other computers.

## how to crud

to implement crud functionality for an entity in laravel, follow these steps:

- create a controller (EntityController.php)
- create empty crud methods (read, create, update, delete)
- register endpoints in the router (GET /entity etc.)
- create a model class (Entity.php)
- define properties (@property string title etc.)
- create a migration (0X0_entity.php)
- run migrations (composer run-script seed)
- fill in crud methods in controller
- test it in insomnia
- ...

