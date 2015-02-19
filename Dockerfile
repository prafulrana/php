# Full list of versions available here: https://registry.hub.docker.com/_/php/tags/manage/
FROM php:5-apache

# Open up ports on the server
EXPOSE <user-specified-ports>

# Add repository files to server
ADD ./<repo-name> /var/www/html/
WORKDIR /var/www/html

# Install dependencies
RUN apt-get upgrade && apt-get -y update && apt-get install -y install mysql-client php-apc pwgen python-setuptools curl unzip # runnable-cache

# Wordpress Requirements
RUN apt-get -y install php5-curl php5-gd php5-intl php-pear php5-imagick php5-imap php5-mcrypt php5-memcache php5-ming php5-ps php5-pspell php5-recode php5-sqlite php5-tidy php5-xmlrpc php5-xsl # runnable-cache

