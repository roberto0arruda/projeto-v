FROM php:7.1-fpm

RUN apt-get update && \
    apt-get install -y \
        wget \
        git \
        libmcrypt-dev \
        mysql-client \
        libmagickwand-dev --no-install-recommends

RUN pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install mcrypt pdo_mysql zip

RUN wget -q https://getcomposer.org/composer.phar -O /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer

COPY ./docker/init.sh /usr/local/bin/init
RUN chmod +x /usr/local/bin/init