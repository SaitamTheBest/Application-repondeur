FROM alpine:3.20

# Install default packages
RUN apk update \
    && apk upgrade \
    && apk add --no-cache \
      bash \
      git \
      unzip

# Install and configure PHP packages
RUN apk add --no-cache \
    php83-cli \
    php83-curl \
    php83-ctype \
    php83-dom \
    php83-iconv \
    php83-intl \
    php83-mbstring \
    php83-opcache \
    php83-openssl \
    php83-pecl-apcu \
    php83-pecl-ds \
    php83-pecl-xdebug \
    php83-phar \
    php83-sodium \
    php83-tokenizer \
    php83-xml \
    php83-xmlreader \
    php83-xmlwriter

# Install Composer
RUN /usr/bin/php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && /usr/bin/php composer-setup.php --filename=composer --install-dir=/usr/local/bin \
    && /usr/bin/php -r "unlink('composer-setup.php');"

# Configure PHP and PHP modules
RUN echo "zend_extension=xdebug.so" >> /etc/php83/conf.d/50_xdebug.ini \
    && echo "xdebug.mode=coverage" >> /etc/php83/conf.d/50_xdebug.ini \
    && echo "apc.enable_cli=1" >> /etc/php83/conf.d/apcu.ini

WORKDIR /app
