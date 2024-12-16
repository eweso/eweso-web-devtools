FROM php:8.3-cli
RUN apt-get update -y && apt-get install -y \
    git zip
RUN pecl install xdebug && \
    docker-php-ext-enable xdebug
RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer
