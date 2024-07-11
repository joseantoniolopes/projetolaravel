FROM php:7.4-apache
RUN apt-get update --fix-missing && apt-get install --fix-missing -y \
	apt-transport-https \
	libzip-dev \
	libpq-dev \
	libfreetype6-dev \
	libjpeg62-turbo-dev \
    gnumeric \
	&& docker-php-ext-install pdo pdo_pgsql pgsql calendar zip
	
RUN a2enmod headers
RUN apt-get install wget -y
#RUN ln -s mkdir -p /etc/httpd/logs/ 

COPY apache_default /etc/apache2/sites-enabled/000-default.conf

COPY . /var/www/html/

WORKDIR /var/www/html

EXPOSE 9000