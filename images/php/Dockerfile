FROM php:7.1-fpm
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        curl \
        vim \
        net-tools \
        libpq-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql

RUN pecl install redis-3.0.0 \
    && pecl install xdebug-2.5.0 \
    && docker-php-ext-enable redis xdebug

EXPOSE 9000

CMD ["php-fpm"]
