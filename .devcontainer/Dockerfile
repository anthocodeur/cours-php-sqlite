FROM php:8.1-alpine
RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-3.1.3 \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN echo "xdebug.var_display_max_depth=10" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.var_display_max_children=256" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.var_display_max_data=1024" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN echo "xdebug.mode=debug,develop" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini


    
# Définir le répertoire de travail
WORKDIR /workspaces/php-project
CMD [ "php", "-S", "0.0.0.0:8000"]
