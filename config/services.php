<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '789305654421319',
        'client_secret' => 'd8718ba34a0179da088fb3628f2bbaf1',
        'redirect' => 'http://mew.musbe.ca/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'Hz7STqUWvk3Keo1Yedca7DJcw',
        'client_secret' => 'qjWJNF8LrozOhd9zcPsrbC46EZg3gqq6RLwCMDmAL3aANxqqRm',
        'redirect' => 'http://mew.musbe.ca/auth/twitter/callback',
    ],

    'google' => [
        'client_id' => '431714739626-qb21pd2ugo3iq698sj3d46kr092jhdna.apps.googleusercontent.com',
        'client_secret' => 'EZAw8_YAtimksUiFS-kNaXVY',
        'redirect' => 'http://mew.musbe.ca/auth/twitter/callback',
    ],

    'github' => [
        'client_id' => '02ed5c2847f37e30aabe',
        'client_secret' => '46816bd3d9f52d6c27b3924b81b2d584738fabaf',
        'redirect' => 'http://mew.musbe.ca/auth/github/callback',
    ],
];
