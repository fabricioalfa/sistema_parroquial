#usar imagen de base de PHP
FROM php:8.2-cli

#establecer el directorio de trabajo
WORKDIR /app

#copiar el contenido del directorio actual al directorio de trabajo
COPY . .

#instalar extensiones de PHP
RUN docker-php-ext-install pdo pdo_mysql

#instalar composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#instalar dependencias de composer
RUN composer install