<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->email,
        'facebook_id' => $faker->numberBetween(1, 9999999),
        'twitter_id' => $faker->numberBetween(1, 9999999),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});