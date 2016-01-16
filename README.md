# My E-Sports World (MEW) #
[![Build Status](https://travis-ci.org/yichenzhu1337/chosen_solutions.svg?branch=master)](https://travis-ci.org/yichenzhu1337/chosen_solutions)
The place where gamers become pros.

## Repository Information & Guide ##

### API Documentation ###
https://speca.io/yichenzhu1337/mew-api

### Testing/Live Server Details ###
- IP Address: 104.131.240.111
- Username: forge
- Sudo Password: W1czITjYk3YHdOvD2OVY
- Database Name: musbe
- Database Username: forge
- Database Password: X4sE49wwdSymapUC628N

### Database Configuration ###
1. create a file called ".env.php"
2. copy and paste:
```
DB_HOST=localhost
DB_DATABASE=my_esports_world
DB_USERNAME=root
DB_PASSWORD=
```
### Backend Setup and Update ###
1. composer self-update
1. Install Laravel: "composer install"
2. update Laravel: "composer update"
3. Migrate your database: "php artisan migrate --force"
4. Seed your database: "php artisan db:seed"
5. Autoload All files: "composer dump-autoload -o"

### Frontend Setup and Update ###
1. Install node_modules: "cd public", "npm install"
2. Install bower_components: "cd public", "bower install", "bower list"
3. Update bower_components: "cd public", "bower update", "bower list"

### Running Gulp ###
1. "gulp build --dev" or "gulp build --prod"
2. "gulp watch --dev"

### Running the application ###
1. type "php artisan serve" on the command line to start the server
2. host is at: "localhost:8000" / php -S localhost:8000
3. run gulp and watcher: "gulp watch --dev"
4. access api via the prefix: "localhost:8000/api/v1/[route-name]"

### Testing with PHPUnit ###
1. Windows Aliasing: (at)DOSKEY phpunit=vendor\bin\phpunit
2. Linux Aliasing: alias phpunit=vendor\bin\phpunit
3. type "phpunit" on the command line

### Testing with Codeception ###
1. Windows Aliasing: (at)DOSKEY cc=vendor\bin\codecept
2. Linux Aliasing: alias cc=vendor\bin\codecept
3. "cc run [suite]"