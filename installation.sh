#!/usr/bin/env bash
ls -al

composer self-update
composer install
composer update

php artisan migrate --force
php artisan db:seed

cd public
bower install
npm install

gulp build --dev
gulp watch --dev

echo "Installation Complete!"