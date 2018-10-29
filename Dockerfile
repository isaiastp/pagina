FROM ubuntu:16.04
MAINTAINER Cristian Tala S. <http://www.cristiantala.cl>
#We update the repositories and we do an upgrade
RUN apt-get -y update && apt-get -y upgrade

#We install apache2 and php7 with all the usual libraries.
RUN apt-get -y install \
apache2 \
php7.0 \
libapache2-mod-php7.0 \
php7.0-mysql \
php7.0-curl \
php7.0-gd \
php7.0-intl \
php-pear \
php-imagick \
php7.0-imap \
php7.0-mcrypt \
php-memcache  \
php7.0-pspell \
php7.0-recode \
php7.0-sqlite3 \
php7.0-tidy \
php7.0-xmlrpc \
php7.0-xsl \
php7.0-mbstring \
php-gettext

#We install GIT
RUN apt-get install -y git

#We install CURL
RUN apt-get install -y curl

#We install Python PIP for EBS-CLI
RUN apt-get install -y python-pip
RUN pip install --upgrade pip

#We install EBS-CLI
RUN pip install --upgrade --user awsebcli


# Install Composer and make it available in the PATH
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

#Cleaning a little bt=it the container to make it slimmer.
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
RUN git clone https://isaiastp:isaiastp1@github.com/isaiastp/pagina.git
#We open port 80
EXPOSE 80

#We start Apache2 at the moment of starting the server
CMD ["/usr/sbin/apache2ctl", "-D", "/pagina/login.php"]
