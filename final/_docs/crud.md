# crud

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
