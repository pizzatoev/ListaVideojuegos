FROM php:8.2-apache

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    zip unzip libzip-dev libpng-dev libonig-dev curl git libsqlite3-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar el código del proyecto
COPY . /var/www/html

WORKDIR /var/www/html

# Instalar dependencias de Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Crear archivo SQLite si no existe
RUN touch database/database.sqlite

# Permisos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Activar mod_rewrite para Apache
RUN a2enmod rewrite

# Configurar Apache para usar public/ como raíz
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

EXPOSE 80

# Ejecutar migraciones y luego iniciar Apache
CMD php artisan migrate --force && apache2-foreground
