FROM yiisoftware/yii2-php:8.0-fpm

# Install modules
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libicu-dev \
        libzip-dev \
        libonig-dev \
        wget \
        git \
            --no-install-recommends

RUN docker-php-ext-install zip intl mbstring pdo_mysql exif gd
#
#RUN pecl install -o -f xdebug-2.9.8 \
#    && rm -rf /tmp/pear





RUN usermod -u 1000 www-data

VOLUME /root/.composer
WORKDIR /app

EXPOSE 9000
CMD ["php-fpm"]