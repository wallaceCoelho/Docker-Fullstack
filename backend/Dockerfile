FROM php:8.1-fpm

COPY composer.lock composer.json /var/www/html/

WORKDIR /var/www/html/

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    zip \
    vim \
    git \
    curl

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/html

RUN chown -R www-data:www-data \
    /var/www/html/storage \
    /var/www/html/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
