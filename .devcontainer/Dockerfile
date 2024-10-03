# Utiliser une image de base avec PHP
FROM php:8.1-cli

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer des extensions PHP si nécessaire
RUN docker-php-ext-install pdo pdo_mysql

# Définir le répertoire de travail
WORKDIR /workspaces/php-project
