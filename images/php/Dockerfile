FROM php:5.6-fpm
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
        curl \
        vim \
        net-tools \
        libpq-dev \
        php5-mysql \
    && docker-php-ext-install mysqli pdo pdo_mysql

EXPOSE 9000

CMD ["php-fpm"]