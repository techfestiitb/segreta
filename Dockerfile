FROM php

RUN apt update
RUN apt upgrade -y
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
    
WORKDIR /app
COPY . .

RUN composer require laravel/ui
RUN composer install

RUN chmod a+x ./entrypoint.sh

ENTRYPOINT ["./entrypoint.sh"]