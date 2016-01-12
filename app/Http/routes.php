<?php

session_start();

Route::get('/', function ()
{
    return view('index');
});

Route::group(['middleware' => ['web']], function ()
{
    return 1;
});

// App routes
Route::post('register', 'Auth\AuthController@register');

Route::post('login', 'Auth\AuthController@login');

Route::get('logout', 'Auth\AuthController@logout');

Route::get('profile', 'Auth\AuthController@profile');

Route::get('test', 'Auth\AuthController@test');

Route::get('twitter', 'Auth\AuthController@twitter');

Route::resource('profiles', 'ProfileController');