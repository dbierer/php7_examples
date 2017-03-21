#!/usr/bin/env bash
docker run --rm -it \
  -v ${PWD}/../../:/www \
  -p 7777:80 \
  -p 10444:443 \
  -p 13307:3306 \
  -p 10023:22 \
  asclinux/unlikelysource-php-7.0.10 \
  /www/docs/docker/bin/deploy.bash run
