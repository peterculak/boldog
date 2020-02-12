FROM wordpress:5.3.2-php7.2-apache
COPY ./html /var/www/html/

RUN apt-get update
RUN apt-get install -y nano jq