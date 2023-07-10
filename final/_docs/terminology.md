# terminology

...

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