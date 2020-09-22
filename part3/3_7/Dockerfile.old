FROM php:7.3.1
RUN apt-get update && apt-get -y install git
COPY tahoo tahoo
WORKDIR tahoo
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer
RUN composer install
COPY .env /tahoo/.env
CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]
