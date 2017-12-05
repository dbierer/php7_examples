## CODE EXAMPLES USAGE:

You can run the code examples by using either PHP's built-in web server or Docker containers.

### PHP built-in web server
1. Install *both* PHP 5.6 and PHP 7 on a VM
2. Create a symlink /usr/bin/php5 to the php 5.6 install
3. Create a symlink /usr/bin/php7 to the php 7.0 install
4. Upload the code examples
5. Open 2 terminal windows and cd to the code examples in both
6. In the 1st: php5 -S ip_address:5656
7. In the 2nd: php7 -S ip_address:7070

### Docker containers
Prerequisite :
- the docker-engine must be installed on your computer/VM (ex. [Docker Installation on Debian](https://docs.docker.com/engine/installation/linux/debian/))

Run the containers :
- With a gnome-terminal (Linux/Gnome) :
    1. cd to the code examples directory
    2. run the main BASH script in a gnome-terminal window :
```
$ cd php7_examples
$ ./docker_run.bash
```

- Without a gnome-terminal (Linux/KDE, Windows/MinGW, Mac) :
    1. cd to the docs/docker subdirectory of the code examples directory
    2. run the four scripts that are located in this subdirectory in four different BASH shell windows :

BASH window #1 :
```
$ cd php7_examples/docs/docker
$ ./run-5.6.bash
```
BASH window #2 :
```
$ cd php7_examples/docs/docker
$ ./run-7.0.bash
```
BASH window #3 :
```
$ cd php7_examples/docs/docker
$ ./run-7.1.bash
```
BASH window #4 :
```
$ cd php7_examples/docs/docker
$ ./run-7.2.bash
```

To stop the containers, just type 'exit' and press enter in each terminal window.

## FROM YOUR BROWSER:

1. Open a new tab
2. Go to ip_address:5656
3. Open a new tab
4. Go to ip_address:7070

In addition, if you are using the Docker containers :

5. Open a new tab
6. Go to ip_address:7171
7. Open a new tab
8. Go to ip_address:7272
9. Now you can demo the results of the same code in both PHP 5.x and PHP 7.x (PHP 7.1 and 7.2 if you are using Docker)

## OPEN PORTS 5656 and 7070 in Fedora:

```
firewall-cmd --zone=public --add-port=5656/tcp --permanent
firewall-cmd --zone=public --add-port=7070/tcp --permanent
firewall-cmd --reload
```

## OPEN PORTS 5656 and 7070 using iptables:

1. find line numbers:
```
iptables -L INPUT --line-numberss
```

2. insert the rule after a certain line number (i.e. 2)
```
iptables -I INPUT 2 -p tcp -m state --state NEW -m tcp --dport 5656 -j ACCEPT
iptables -I INPUT 2 -p tcp -m state --state NEW -m tcp --dport 7070 -j ACCEPT
```

3. save the new rules
```
service iptables save
```

## Manual PHP 7 Installation
1. Download the target version
2. cd to that directory
3. Run these commands (assumes Linux, not logged in as root)
```
$./configure --with-pdo-mysql=/usr --enable-calendar --with-curl=/usr/include/curl --with-openssl --with-gettext=/usr --with-mhash=DIR --enable-intl --enable-mbstring --with-mcrypt=/usr --with-mysql-sock=/var/run/mysqld.sock --with-pdo-mysql=/usr --enable-zip --with-openssl=/usr --with-libxml-dir=/usr --with-libdir=/lib/x86_64-linux-gnu --enable-sockets --enable-libxml --enable-soap --with-gd --with-jpeg-dir=/usr --with-webp-dir=/usr --with-xpm-dir=/usr --with-png-dir=/usr --with-zlib-dir=/usr --with-freetype-dir=/usr --enable-gd-native-ttf
$ make
$ make test
$ sudo make install
```

By default, `make install` will install all the files in `/usr/local/bin`, `/usr/local/lib` etc.  
You can specify an installation prefix other than `/usr/local` using `--prefix`, for instance 
```
--prefix=$HOME
```

### Ubuntu 16.04 Installation:
Libraries needed (given the "./configure" string above)
- sudo apt-get install libxml2-dev
- sudo apt-get install libssl-dev
- sudo apt-get install libcurl4-openssl-dev
- sudo apt-get install libwebp-dev
- sudo apt-get install libjpeg-dev
- sudo apt-get install libpng-dev
- sudo apt-get install libxpm-dev
- sudo apt-get install libfreetype6-dev
- sudo apt-get install libmcrypt-dev
- sudo apt-get install libmysqlclient-dev
- sudo apt-get install libvpx-dev
* Assumes **MySQL** has been installed

### Redhat / Fedory Installation:
See: https://crybit.com/20-common-php-compilation-errors-and-fix-unix/

