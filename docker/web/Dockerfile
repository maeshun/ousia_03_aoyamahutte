FROM php:8.3.30-apache
RUN docker-php-ext-install mysqli &&\
  # JPEG 対応
  #apt-get install -y libpng-dev libjpeg62-turbo-dev libfreetype6-dev vim &&\
  #docker-php-ext-configure gd --with-jpeg --with-freetype &&\
  #docker-php-ext-install -j$(nproc) gd &&\
  ln -sf /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load &&\
  ln -sf /etc/apache2/mods-available/headers.load /etc/apache2/mods-enabled/header.load

COPY ./apache2.conf /etc/apache2/