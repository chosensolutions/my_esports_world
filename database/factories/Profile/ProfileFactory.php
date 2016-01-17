<?php

$factory->define(App\Acme\Models\Profile::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->email
    ];
});

$factory->define(App\Acme\Models\ProfileEducation::class, function (Faker\Generator $faker) {
    return [
        'institution' => $faker->firstNameFemale
    ];
});

$factory->define(App\Acme\Models\ProfileLanguage::class, function (Faker\Generator $faker) {
    return [
        'institution' => $faker->firstNameFemale
    ];
});

$factory->define(App\Acme\Models\ProfileExperience::class, function (Faker\Generator $faker) {
    return [
        'institution' => $faker->firstNameFemale
    ];
});

$factory->define(App\Acme\Models\ProfileAward::class, function (Faker\Generator $faker) {
    return [
        'institution' => $faker->firstNameFemale
    ];
});