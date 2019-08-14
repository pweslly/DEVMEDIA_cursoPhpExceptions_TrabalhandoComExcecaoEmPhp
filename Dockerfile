FROM php:7.3-apache
RUN docker-php-ext-install pdo pdo_mysql
#RUN mkdir /var/www/public
RUN a2enmod rewrite
EXPOSE 80
CMD ["apache2-foreground"]
