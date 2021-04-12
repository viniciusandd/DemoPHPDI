FROM php:7.0-apache

RUN apt-get update

RUN apt-get install -y git zip

RUN apt-get install -y libpq-dev

RUN a2enmod rewrite

RUN docker-php-ext-install pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php && \ 
    chmod +x composer.phar && \     
    mv composer.phar /usr/local/bin/composer

ADD . /var/www/html/

RUN composer install

EXPOSE 80