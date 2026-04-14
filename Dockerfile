FROM php:8.2-apache

# Install MySQL extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY project1/ /var/www/html/

RUN a2enmod rewrite