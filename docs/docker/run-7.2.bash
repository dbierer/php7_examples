#!/usr/bin/env bash
docker run --rm -it \
  -v ${PWD}/../../:/srv/www \
  -p 7272:80 \
  -p 10446:443 \
  -p 13309:3306 \
  asclinux/unlikelysource-php-7.2.0:8.0 \
  /srv/www/docs/docker/bin/deploy.bash run
