<?php

$factory->define(App\Acme\Models\Profile::class, function (Faker\Generator $faker)
{
    return [
        'user_id' => 1,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'description' => $faker->paragraph(3),
        'nationality' => $faker->country,
        'location' => $faker->locale,
        'status' => $faker->firstName,
        'image_url' => $faker->imageUrl($width = 640, $height = 480) ,
        'summoner_url' => $faker->url,  // lolking, op.gg, lolprofile, etc....
        'public' => $faker->boolean(50),

    ];
});