#!/usr/bin/env bash
docker run --rm -it \
  -v ${PWD}/../../:/www \
  -p 5555:80 \
  -p 10443:443 \
  -p 13306:3306 \
  -p 10022:22 \
  andrewscaya/debian-xampp-5.6.28 \
  /www/docs/dockerfiles/bin/xampp-deploy.bash run
