FROM php:8.2-apache

COPY project1/ /var/www/html/

RUN a2enmod rewrite