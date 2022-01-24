#!/bin/bash
sleep 5
php artisan migrate
php artisan config:clear
php artisan serve --host=0.0.0.0