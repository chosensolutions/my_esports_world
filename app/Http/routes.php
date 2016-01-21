<?php

//session_start();

/**
 * SPA
 */
Route::get('/', function ()
{
    return view('index');
});

/**
 * requires (not require_once) all the routes file from Acme/Routes folder
 */
Route::group([
    'prefix' => 'api/v1/',
    'after' => 'allowOrigin',
    'middleware' => [
        'web'
    ]
], function()
{
    foreach (File::allFiles(__DIR__.'/../Acme/Routes') as $partial)
    {
        require $partial->getPathname();
    }
});

use App\Acme\Models\Profile;
Route::get('alg', function()
{
    $properties = [
        "first_name" => 'a',
        "last_name" => 'a',
        "description" => 'a',
        "nationality" => 'a',
        'email' => '@'
    ];
    foreach($properties as $property => $value)
    {
        $profile = Profile::with(['user'])->Orwhere($property, 'LIKE', "%$value%");
    }

    return $profile->get();

});