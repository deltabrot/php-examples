#!/bin/bash

docker run -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html apache-php
