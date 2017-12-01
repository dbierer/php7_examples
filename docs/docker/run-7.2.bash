#!/usr/bin/env bash
docker run --rm -it \
  -v ${PWD}/../../:/www \
  -p 7272:80 \
  -p 10446:443 \
  -p 13309:3306 \
  -p 10025:22 \
  asclinux/unlikelysource-php-7.2.0 \
  /www/docs/docker/bin/deploy.bash run
