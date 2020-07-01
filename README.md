# docker-laravel

## Constitution
* nginx:1.15.6
* php:7.2-fpm
* mysql:8.0
* phpmyadmin/phpmyadmin

## What to do after cloning
1. `docker-compose exec app bash`,`composer create-project --prefer-dist laravel/laravel app`

2. Change .env of db
  `DB_CONNECTION=mysql  DB_HOST=mysql  DB_PORT=3306  DB_DATABASE=sample  DB_USERNAME=user  DB_PASSWORD=password`

## port
* http://localhost:8000 (Laravel) 
* http://localhost:3000 (phpmyadmin)
