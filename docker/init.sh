#!/bin/bash
cd /var/www

## Set permissions
chgrp -R www-data storage bootstrap/cache
chmod -R ug+rwx storage bootstrap/cache

## Install Laravel
php composer install
php artisan key:generate
php artisan migrate --seed