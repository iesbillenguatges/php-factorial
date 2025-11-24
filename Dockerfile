# Imatge base amb Apache + PHP
FROM php:8.2-apache

# Copia els arxius del projecte al directori públic d'Apache
COPY . /var/www/html/

# Dona permisos (opcionales però recomanats)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Activa el mòdul de reescriptura si algun dia et fa falta
RUN a2enmod rewrite

# Exposa el port
EXPOSE 80
