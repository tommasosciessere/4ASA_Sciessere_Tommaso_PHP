# FROM mcr.microsoft.com/devcontainers/php:1-8.2-bullseye
FROM php:8.2-apache


# ENV WEBROOT /var/www/html
COPY . /var/www/html

# RUN a2enmod php7.4

EXPOSE 80

CMD ["apache2-foreground"]