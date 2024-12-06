FROM ubuntu:24.04
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update
RUN apt-get nano
RUN apt-get install apache2 -y
RUN apt-get install php -y
RUN apt-get install php-mysql -y
ADD /Website/ /var/www/html/
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
