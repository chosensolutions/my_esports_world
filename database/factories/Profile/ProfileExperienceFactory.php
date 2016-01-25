<?php

$factory->define(App\Acme\Models\ProfileExperience::class, function (Faker\Generator $faker)
{
    return [
        'organization' => $faker->firstName,
        'position' => $faker->firstName,
        'location' => $faker->streetName,
        'date_from' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'date_to' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'description' => $faker->paragraph(10),
    ];
});
