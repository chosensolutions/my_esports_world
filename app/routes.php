<?php

/**
 * Home Route,
 * Static Pages Routes
 */
Route::get('/home', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/about', [
    'as' => 'about',
    'uses' => 'PagesController@about'
]);

Route::get('/contact', [
    'as' => 'contact',
    'uses' => 'PagesController@contact'
]);

Route::get('/terms', [
    'as' => 'terms',
    'uses' => 'PagesController@terms'
]);

/**
 * Resourceful Routes
 */

Route::resource('posts', 'PostsController');

/**
 *  Authentication Routes:
 *  - register form
 *  - login form
 */
Route::get('/register', [
    'as' => 'register',
    'uses' => 'AuthenticationsController@getRegister'
]);

Route::post('/register', [
    'as' => 'register',
    'uses' => 'AuthenticationsController@postRegister'
]);

Route::get('/login', [
    'as' => 'get-login',
    'uses' => 'AuthenticationsController@getLogin'
]);



/**
 * MISC Routes
 */
Route::get('/test', function()
{
    return View::make('posts.index');
});

/**
 * Service Providers and IOC Bindings
 */
App::bind('Acme\Interfaces\PostRepositoryInterface', 'Acme\Repositories\DbPostRepository');