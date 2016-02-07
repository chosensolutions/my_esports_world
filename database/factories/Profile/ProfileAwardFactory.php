<?php

$factory->define(App\Acme\Models\ProfileAward::class, function (Faker\Generator $faker)
{
    return [
        'name' => $faker->firstName,
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'description' => $faker->paragraph(3),

    ];
});