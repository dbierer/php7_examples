#!/usr/bin/env bash
docker run --rm -it \
  -v ${PWD}/../../:/www \
  -p 7171:80 \
  -p 10445:443 \
  -p 13308:3306 \
  -p 10024:22 \
  asclinux/unlikelysource-php-7.1.3 \
  /www/docs/docker/bin/deploy.bash run
