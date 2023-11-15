FROM php:7.1.26-cli-alpine

ARG HOST_USER_ID
ARG HOST_GROUP_ID

# MariaDB
RUN apk add --no-cache mariadb-client \
    && docker-php-ext-install mysqli pdo pdo_mysql

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN addgroup -g ${HOST_GROUP_ID} --system app
RUN adduser -G app --system -D -s /bin/sh -u ${HOST_USER_ID} app
USER app

WORKDIR /app
