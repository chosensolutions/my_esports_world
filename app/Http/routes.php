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