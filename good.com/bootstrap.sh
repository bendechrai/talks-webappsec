#!/usr/bin/env bash

aptitude update
aptitude install -y vim

DBPASSWD=root
echo "mysql-server mysql-server/root_password password $DBPASSWD" | debconf-set-selections
echo "mysql-server mysql-server/root_password_again password $DBPASSWD" | debconf-set-selections
aptitude install -y mysql-client mysql-server libapache2-mod-php5 php5{,-{cli,gd,json,mcrypt,mysql,dev}} php-pear

# MAKE APACHE RUN AS VAGRANT
sed -i 's@www-data@vagrant@' /etc/apache2/envvars 
chown vagrant /var/lock/apache2
service apache2 restart

mysql -uroot -p$DBPASSWD -e 'create database understanding';
php ./db_create.php

if ! [ -L /var/www ]; then
  rm -rf /var/www
  ln -fs /vagrant/www /var/www
fi
