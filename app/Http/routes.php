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
Route::group(['prefix' => 'api/v1/', 'after' => 'allowOrigin', 'middleware' => ['web']], function()
{
    foreach (File::allFiles(__DIR__.'/../Acme/Routes') as $partial)
    {
        require $partial->getPathname();
    }
});

Route::group(['after' => 'allowOrigin', 'middleware' => ['web']], function()
{
    Route::get('auth/facebook', 'Auth\AuthController@redirectToProviderFacebook');
    Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallbackFacebook');

    Route::get('auth/facebook', 'Auth\AuthController@redirectToProviderTwitter');
    Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallbackTwitter');

    Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');
});
