FROM php:7.0-apache
COPY src/ /var/www/html/
COPY ./lib/smarty-3.1.30 /usr/local/lib/Smarty/