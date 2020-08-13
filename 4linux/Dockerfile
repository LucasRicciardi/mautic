
FROM mautic/mautic:apache

RUN pecl install apcu

COPY ./4linux/mautic.crontab /etc/cron.d/mautic

COPY ./4linux/php.ini /usr/local/etc/php/php.ini

COPY ./plugins /var/www/html/plugins
