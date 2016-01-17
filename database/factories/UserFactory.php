<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->email,
        'facebook_id' => $faker->numberBetween(1, 9999999),
        'twitter_id' => $faker->numberBetween(1, 9999999),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Acme\Models\Profile::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->email
    ];
});