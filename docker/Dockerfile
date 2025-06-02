FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl \
    unzip


COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www