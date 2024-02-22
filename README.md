## Installation

```
- docker network create oe
- cd docker/
- docker-compose build
- docker-compose up -d
- add db, name in env file
- docker exec -it oe_php composer install
- docker exec -it oe_php php artisan migrate
- docker exec -it oe_php php artisan storage:link
- docker exec -it oe_php php artisan db:seed
```

Основной код в папке Modules
