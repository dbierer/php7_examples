#!/usr/bin/env bash
docker run --rm -it \
  -v ${PWD}/../../:/srv/www \
  -p 7070:80 \
  -p 10444:443 \
  -p 13307:3306 \
  asclinux/unlikelysource-php-7.0.10:8.0 \
  /srv/www/docs/docker/bin/deploy.bash run
