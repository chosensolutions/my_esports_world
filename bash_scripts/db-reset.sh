#!/usr/bin/env bash
cd ..
php artisan migrate:refresh --force
php artisan db:seed
echo "Database fully reset!"