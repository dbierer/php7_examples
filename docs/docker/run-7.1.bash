#!/usr/bin/env bash
docker run --rm -it \
  -v ${PWD}/../../:/srv/www \
  -p 7171:80 \
  -p 10445:443 \
  -p 13308:3306 \
  asclinux/unlikelysource-php-7.1.3:8.0 \
  /srv/www/docs/docker/bin/deploy.bash run
