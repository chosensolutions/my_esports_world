<?php

$factory->define(App\Acme\Models\ProfileEducation::class, function (Faker\Generator $faker)
{
    return [
        'institution' => $faker->firstNameFemale,
        'date_from' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'date_to' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'degree' => 'High School',
        'description' => $faker->paragraph(3)
    ];
});