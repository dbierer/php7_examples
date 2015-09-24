#!/bin/sh
sudo firewall-cmd --zone=public --add-port=7777/tcp --permanent
sudo firewall-cmd --zone=public --add-port=5555/tcp --permanent
sudo firewall-cmd --reload
