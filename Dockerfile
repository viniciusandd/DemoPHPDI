FROM php:7.0-apache

RUN apt-get update

RUN apt-get install -y git zip

RUN apt-get install -y libpq-dev

RUN docker-php-ext-install pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php && \ 
    chmod +x composer.phar && \     
    mv composer.phar /usr/local/bin/composer

RUN a2enmod rewrite

EXPOSE 80