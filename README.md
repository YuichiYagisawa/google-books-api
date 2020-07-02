# google-books-api

## docker
* nginx:1.15.6
* php:7.2-fpm
* mysql:8.0
* phpmyadmin/phpmyadmin

* appコンテナへ入る
`docker-compose exec app bash`

* mysqlコンテナへ入る
`docker-compose exec mysql bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'`



## port
* http://localhost:8000 (Laravel) 
* http://localhost:3000 (phpmyadmin)
