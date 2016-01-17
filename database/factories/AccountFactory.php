<?php

$factory->define(App\Acme\Models\Account::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->name,
        'phone_number' => $faker->phoneNumber
    ];
});