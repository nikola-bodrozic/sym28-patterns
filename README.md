Symfony patterns
================
##Deploy on test environment
- `composer install`
- import data from database.sql `mysql -u root -p test < database.sql`
- `php app/console server:run`
- `http://localhost:8000`
- Test `php phpunit-5.7.phar -c app/`

##Features
- one to many relatioship in `zgrada_index`
- checkox || radio buttons in `chkbox_index`
- symfony service container and dependacy injection in `sym_service`
