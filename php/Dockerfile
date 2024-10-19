FROM php:8.3-fpm

RUN mkdir -p /var/www/html

RUN usermod -u 1000 www-data

RUN docker-php-ext-install pdo pdo_mysql