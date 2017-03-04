#!/usr/bin/env bash
export PATH=/opt/lampp/bin:$PATH
mv /opt/lampp/htdocs /opt/lampp/htdocs.OLD
cd /opt/lampp
ln -s /www htdocs
cd
/opt/lampp/lampp start
sleep 5
/bin/bash
exit 0