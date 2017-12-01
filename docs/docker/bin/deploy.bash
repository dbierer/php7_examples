#!/usr/bin/env bash
cd /srv
mv www www.OLD
ln -s /www .
sed -i 's/DirectoryIndex index.html/DirectoryIndex index.php index.html/' /etc/httpd/httpd.conf
/etc/init.d/mysql start
/etc/init.d/php-fpm start
/etc/init.d/httpd start
sleep 5
/bin/bash
exit 0