<?php

$factory->define(App\Acme\Models\Video::class, function (Faker\Generator $faker)
{
    return [
        'url' => $faker->url,
        'type' => [
            'youtube',
            'twitch',
            'replay',
            'playstv'
        ][$faker->numberBetween(0, 3)]
    ];
});