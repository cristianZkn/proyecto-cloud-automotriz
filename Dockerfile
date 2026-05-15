FROM php:8.2-apache
# Instalar extensiones de PostgreSQL para PHP
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql
# Copiar el código fuente al servidor web del contenedor
COPY src/ /var/www/html/
# Exponer el puerto 80
EXPOSE 80