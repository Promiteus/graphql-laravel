#!/usr/bin/env sh
docker exec -it  php-fpm bash -c "php artisan db:seed --class=SimpleSeeder"

