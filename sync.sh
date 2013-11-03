#!/bin/bash

chmod 777 -R *
scp -r $PWD/* root@172.16.207.133:/var/www/proyecto2013
