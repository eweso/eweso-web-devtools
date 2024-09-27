FROM php:8.3-cli
RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN --mount=type=secret,id=composer_auth cp /run/secrets/composer_auth /root/.composer/auth.json
RUN apt-get update && apt-get install -y git zip
