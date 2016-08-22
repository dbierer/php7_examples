##CODE EXAMPLES USAGE:

1. Install *both* PHP 5.6 and PHP 7 on a VM
2. Create a symlink /usr/bin/php5 to the php 5.6 install
3. Create a symlink /usr/bin/php7 to the php 7.0 install
4. Upload the code examples
5. Open 2 terminal windows and cd to the code examples in both
6. In the 1st: php5 -S ip_address:5555
7. In the 2nd: php7 -S ip_address:7777

##FROM YOUR BROWSER:

1. Open a new tab
2. Go to ip_address:5555
3. Open a new tab
4. Go to ip_address:7777
5. Now you can demo the results of the same code in both PHP 5.x and PHP 7

##OPEN PORTS 5555 and 7777 in Fedora:

```
firewall-cmd --zone=public --add-port=5555/tcp --permanent
firewall-cmd --zone=public --add-port=7777/tcp --permanent
firewall-cmd --reload
```

##OPEN PORTS 5555 and 7777 using iptables:

1. find line numbers:
```
iptables -L INPUT --line-numberss
```

2. insert the rule after a certain line number (i.e. 2)
```
iptables -I INPUT 2 -p tcp -m state --state NEW -m tcp --dport 5555 -j ACCEPT
iptables -I INPUT 2 -p tcp -m state --state NEW -m tcp --dport 7777 -j ACCEPT
```

3. save the new rules
```
service iptables save
```

##Manual PHP 7 Installation
1. Download the target version
2. cd to that directory
3. Run these commands (assumes Linux, not logged in as root)
```
$ ./configure --with-pdo-mysql=/usr --with-pdo-pgsql=/usr --enable-calendar --with-curl=/usr/include/curl --with-openssl-dir=/usr --with-gettext=/usr --with-mhash=DIR --enable-intl --enable-mbstring --with-mcrypt=/usr --with-mysql-sock=/var/run/mysqld.sock --with-pdo-mysql=/usr --enable-zip --with-openssl=/usr --with-libxml-dir=/usr --with-libdir=/lib/x86_64-linux-gnu --enable-sockets --enable-libxml --enable-soap --with-gd --with-jpeg-dir=/usr --with-webp-dir=/usr --with-xpm-dir=/usr --with-png-dir=/usr --with-zlib-dir=/usr --with-freetype-dir=/usr --enable-gd-native-ttf
$ make
$ make test
$ sudo make install
```
4. Puts PHP in /usr/local/bin/php
