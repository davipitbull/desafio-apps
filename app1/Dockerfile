FROM php:7.4-apache

# Instalar a extensão mysqli
RUN docker-php-ext-install mysqli

# Copiar os arquivos da aplicação para o diretório de execução no contêiner
COPY . /var/www/html
