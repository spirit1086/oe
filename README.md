## Installation

```
- docker network create oe
- cd docker/
- docker-compose build
- docker-compose up -d
- docker exec -it oe_php composer install
- docker exec -it oe_php php artisan migrate
- docker exec -it oe_php php artisan storage:link
- docker exec -it oe_php php artisan db:seed
```
