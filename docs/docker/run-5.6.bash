#!/usr/bin/env bash
docker run --rm -it \
  -v ${PWD}/../../:/srv/www \
  -p 5656:80 \
  -p 10443:443 \
  -p 13306:3306 \
  asclinux/unlikelysource-php-5.6.30:8.0 \
  /srv/www/docs/docker/bin/deploy.bash run
