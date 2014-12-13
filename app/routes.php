<?php

Route::get('/', function()
{
    return View::make('index');
});

Route::group(['prefix' => 'api/v1/', 'after' => 'allowOrigin'], function()
{
    foreach (File::allFiles(__DIR__.'/Acme/Routes') as $partial)
    {
        require $partial->getPathname();
    }
});

