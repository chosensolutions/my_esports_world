<?php

// App routes
Route::post('users/register', 'Auth\AuthController@register');

Route::post('users/login', 'Auth\AuthController@login');

Route::get('users/logout', 'Auth\AuthController@logout');