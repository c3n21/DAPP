ARG PHP_VERSION=""
FROM php:${PHP_VERSION:+${PHP_VERSION}-}fpm-alpine

RUN apk update; \
    apk upgrade;

RUN set -ex && apk --no-cache add \
    postgresql-dev

RUN docker-php-ext-install pgsql pdo pdo_pgsql

COPY "www.conf"     "/usr/local/etc/php-fpm.d/www.conf"

EXPOSE 9000
#RUN docker-php-ext-install mysqli
#RUN docker-php-ext-install pdo pdo_mysql
