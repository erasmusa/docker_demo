FROM php:7.3-fpm as base

RUN apt-get update && apt-get -y install openssh-client less git-core unzip default-mysql-client vim net-tools htop procps
ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && sync && install-php-extensions gd zip mysqli
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

EXPOSE 9000

FROM base as local
COPY ./compose/wordpress/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

#FROM base as static
#ARG sitename
#RUN git clone ssh://codecommit/v1/repos/some-repo-name-${sitename} /var/www/html
#WORKDIR /var/www/html
#RUN composer update -vv
#WORKDIR /var/www/html/web

#FROM static as production
#COPY ./compose/wordpress/prod-entrypoint.sh /entrypoint.sh
#COPY ./compose/wordpress/php-fpm.d/www.conf /usr/local/etc/php-fpm.d/www.conf
#COPY ./compose/wordpress/php/php.ini /usr/local/etc/php/php.ini
#RUN chmod +x /entrypoint.sh

#FROM static as staging
#COPY ./compose/wordpress/staging-entrypoint.sh /entrypoint.sh
#COPY ./compose/wordpress/php-fpm.d/staging-www.conf /usr/local/etc/php-fpm.d/www.conf
#COPY ./compose/wordpress/php/staging-php.ini /usr/local/etc/php/php.ini
#RUN chmod +x /entrypoint.sh
