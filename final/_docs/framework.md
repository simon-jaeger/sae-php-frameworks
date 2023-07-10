# framework

a blueprint for a software architecture (like mvc).

- predefined file and folder structure
- predefined classes that solve common problems
    - Router (direct http requests) 
    - Utils (Str::rev() etc.)
    - DB access
    - File storage
    - Authentification
    - ...
- helpter scripts (running a dev server, filling the db with dummy data, ...)
- debug helper (better error handling, logging, ...)
- automatic security (cors, xss, sql injection, ...)
