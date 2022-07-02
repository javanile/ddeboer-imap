FROM php:8.1-cli

RUN apt-get update && apt-get -y upgrade && \
    apt-get install -y --no-install-recommends wget zip unzip vim nano iputils-ping libxml2-dev gettext libonig-dev libc-client-dev libkrb5-dev && \
   	docker-php-ext-configure imap --with-kerberos --with-imap-ssl && \
    docker-php-ext-install iconv mbstring imap && \
	apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app