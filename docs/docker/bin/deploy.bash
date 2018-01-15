#!/usr/bin/env bash
/etc/init.d/mysql start
/etc/init.d/php-fpm start
/etc/init.d/httpd start
sleep 5
/bin/bash
exit 0