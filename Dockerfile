FROM php:8.1-apache

RUN apt update && apt install -y unzip

RUN docker-php-ext-install pdo pdo_mysql

COPY --chown=www-data:www-data . /var/www/html

RUN mv .env.production .env

#CONFIGURAÇÕES DO APACHE
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
RUN mv ./deploy/apache/fetec.conf /etc/apache2/sites-available/fetec.conf
RUN a2enmod rewrite
RUN a2ensite fetec.conf
RUN a2dissite 000-default.conf

# [NODE & NPM] INSTALL 
RUN apt-get update && apt-get install -y ca-certificates gnupg
RUN mkdir -p /etc/apt/keyrings
RUN curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg
ENV NODE_MAJOR=18
RUN echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_$NODE_MAJOR.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list
RUN apt-get update && apt-get install nodejs -y

# [COMPOSER] INSTALL
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php

#BUILD
WORKDIR /var/www/html

RUN npm install
RUN npm run build

RUN php composer.phar install --optimize-autoloader --no-dev
RUN php artisan key:generate
RUN php artisan config:cache
RUN php artisan view:cache