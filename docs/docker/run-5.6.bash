#!/usr/bin/env bash
docker run --rm -it \
  -v ${PWD}/../../:/www \
  -p 5555:80 \
  -p 10443:443 \
  -p 13306:3306 \
  -p 10022:22 \
  asclinux/unlikelysource-php-5.6.30 \
  /www/docs/docker/bin/deploy.bash run
