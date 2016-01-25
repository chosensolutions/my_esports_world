<?php

$factory->define(App\Acme\Models\ProfileLanguage::class, function (Faker\Generator $faker)
{
    $languages = [
        'Chinese',
        'Spanish',
        'English',
        'Hindi',
        'Arabic',
        'Portuguese',
        'Bengali',
        'Russian',
        'Japanese',
        'Javanese',
        'German',
        'Korean',
        'French',
        'Vietnamese'
    ];

    return [
        'type' => $languages[rand(0, count($languages) - 1)],
        'fluency' => ['native', 'professional', 'limited'][rand(0, 2)]
    ];
});
