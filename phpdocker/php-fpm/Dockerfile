FROM phpdockerio/php:8.4-fpm
WORKDIR "/application"

ARG NODE_VERSION=18

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        git \
        php8.4-bcmath \
        php8.4-bz2 \
        php8.4-cgi \
        php8.4-dba \
        php8.4-excimer \
        php8.4-gd \
        php8.4-gmagick \
        php8.4-gmp \
        php8.4-http \
        php8.4-igbinary \
        php8.4-imap \
        php8.4-intl \
        php8.4-ldap \
        php8.4-mcrypt \
        php8.4-memcache \
        php8.4-memcached \
        php8.4-mysql \
        php8.4-redis \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN apt-get update \
    && curl -sLS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer \
    && curl -sLS https://deb.nodesource.com/setup_$NODE_VERSION.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm \
    && apt-get -y autoremove \
    && apt-get clean
