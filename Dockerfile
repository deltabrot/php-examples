FROM ubuntu:latest
MAINTAINER webmaster@localhost

ENV TZ=Asia/Dubai
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update
RUN apt-get install php php-mysql php-cgi libapache2-mod-php -y


CMD /usr/sbin/apache2ctl -D FOREGROUND
