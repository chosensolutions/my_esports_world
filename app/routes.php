<?php

Route::get('/', function()
{
    return View::make('index');
});

Route::group(['prefix' => 'api/v1/', 'after' => 'allowOrigin'], function()
{
    // requires all the routes file from Acme/Routes folder
    foreach (File::allFiles(__DIR__.'/Acme/Routes') as $partial)
    {
        require_once $partial->getPathname();
    }
});

