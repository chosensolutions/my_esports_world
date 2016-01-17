<?php

App::before(function($request)
{
    //header('Access-Control-Allow-Origin: http://mew.musbe.ca');
    header("Access-Control-Allow-Origin: *");
    //header("Access-Control-Allow-Credentials: *");
    //header("Access-Control-Request-Method: DELETE");
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With, X-Auth-Token');

    header('Access-Control-Allow-Credentials: true');
    header('Allow-Access-Control-Credentials: true');
});

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

    Route::get('auth/twitter', 'Auth\AuthController@redirectToProviderTwitter');
    Route::get('auth/twitter/callback', 'Auth\AuthController@handleProviderCallbackTwitter');

    Route::get('auth/google', 'Auth\AuthController@redirectToProviderGoogle');
    Route::get('auth/google/callback', 'Auth\AuthController@handleProviderCallbackGoogle');

    Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');
});
