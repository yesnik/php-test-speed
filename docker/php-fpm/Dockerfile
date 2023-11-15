FROM php:7.1.26-fpm-alpine

# MariaDB
RUN apk add --no-cache mariadb-client \
    && docker-php-ext-install mysqli pdo pdo_mysql

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

WORKDIR /app
