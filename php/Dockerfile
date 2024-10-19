FROM php:8.3-fpm-alpine

RUN mkdir -p /var/www/html

# Install necessary packages including mysql-client
RUN apk --no-cache add shadow mysql-client && usermod -u 1000 www-data

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql