<?php

$factory->define(App\Acme\Models\ProfileLanguage::class, function (Faker\Generator $faker)
{
    return [
        'type' => 'english',
        'fluency' => 'native'
    ];
});
