#!/usr/bin/env bash
docker run --rm -it \
  -v ${PWD}/../../:/www \
  -p 9999:80 \
  -p 10445:443 \
  -p 13308:3306 \
  -p 10024:22 \
  andrewscaya/debian-xampp-7.1.1 \
  /www/docs/dockerfiles/bin/xampp-deploy.bash run
