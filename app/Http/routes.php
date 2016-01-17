<?php

session_start();

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

Route::group(['after' => 'allowOrigin', 'middleware' => ['web']], function()
{
    Route::get('auth/facebook', 'Auth\AuthController@redirectToProviderFacebook');
    //////
    Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallbackFacebook');
    /////
    Route::get('auth/twitter', 'Auth\AuthController@redirectToProviderTwitter');
    Route::get('auth/twitter/callback', 'Auth\AuthController@handleProviderCallbackTwitter');

    Route::get('auth/google', 'Auth\AuthController@redirectToProviderGoogle');
    Route::get('auth/google/callback', 'Auth\AuthController@handleProviderCallbackGoogle');

    Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');
});
