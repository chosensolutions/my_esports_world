[![Build Status](https://travis-ci.org/yichenzhu1337/my_esports_world.svg?branch=master)](https://travis-ci.org/yichenzhu1337/my_esports_world)

#  My Esports World #
My Esports World is the place for players, coaches, managers, and anyone interested in a career
in e-sports to put up their profile. Professional teams can find players they want and professional
players can find the team they want to join.

## Installation & Build Guide ##

### Backend Setup and Update ###
1. Install Laravel: "composer install"
2. update Laravel: "composer update"
3. Migrate your database: "php artisan migrate"
4. Seed your database: "php artisan db:seed"
5. Autoload All files: "composer dump-autoload -o"

### Frontend Setup and Update ###
1. Install node_modules: "npm install" in root folder
2. Install bower_components: "cd public", "bower install", "bower list"
3. Update bower_components: "cd public", "bower update", "bower list"

### Database Configuration ###
1. create a file called ".env.php"
2. copy and paste:
```
<?php
    return [
        'DB_HOST' => 'localhost',
        'DB_NAME' => 'mew',
        'DB_USERNAME' => 'root',
        'DB_PASSWORD' => 'root'
    ];
```

### Running the application ###
1. type "php artisan serve" on the command line to start the server
2. host is at: "localhost:8000"
3. access api via the prefix: "localhost:8000/api/v1/*route-name*"

### Running Gulp ###
1. "gulp watch"

### Testing with PHPUnit ###
1. Windows Aliasing: (at)DOSKEY phpunit=vendor\bin\phpunit
2. Linux Aliasing: alias phpunit=vendor\bin\phpunit
3. type "phpunit" on the command line

### Testing with Codeception ###
1. Windows Aliasing: (at)DOSKEY cc=vendor\bin\codecept
2. Linux Aliasing: alias cc=vendor\bin\codecept
3. "cc run [suite]"

### API Documentation ###
1. view at: "localhost:8000/api-docs"
2. find routes.php: \vendor\jlapp\swaggervel\src\Jlapp\Swaggervel\routes.php
3. on line 54 delete: {$excludes}
