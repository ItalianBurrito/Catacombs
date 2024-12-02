FROM ubuntu:18.04
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update
RUN apt-get install apache2 -y
RUN apt-get install php -y
RUN apt-get install php-mysql -y
ADD . /Website/
EXPOSE 77
CMD ["apache2ctl", "-D", "FOREGROUND"]
