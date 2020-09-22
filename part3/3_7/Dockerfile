# use alpine-image for size decrease
FROM php:7.3-alpine as build-website
COPY tahoo tahoo
WORKDIR tahoo
RUN apk add --no-cache composer && composer install
# use already php-supported apache web server
FROM php:7.3-apache
COPY --from=build-website tahoo /var/www/html/
# enabling url rewrite and copying new ports file, 
# www-data user cannot use port 80 by default! using 80:7001 mapping
RUN a2enmod rewrite && \
    mv /var/www/html/ports.conf /etc/apache2/ports.conf && \
    mv /var/www/html/.envdocker /var/www/html/.env && \
    chown -R www-data:www-data /var/www/html && \
    chmod 755 /var/www/html
USER www-data
