FROM php:7.4-apache

# Copia o código da aplicação para o diretório padrão do Apache
COPY app/ /var/www/html/

# Habilita mod_rewrite do Apache
RUN a2enmod rewrite

# Instala extensões PHP necessárias
RUN docker-php-ext-install mysqli
