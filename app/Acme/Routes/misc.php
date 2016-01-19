<?php

Route::get('test', function() {

    return redirect()->away('https://www.facebook.com/', 302, [
        'Access-Control-Allow-Origin' => '*',
        'Access-Control-Allow-Methods' => 'GET, POST, PATCH, PUT, DELETE, OPTIONS',
        'Access-Control-Allow-Headers' => 'Origin, Content-Type, X-Auth-Token'
    ]);
});

/*
 *

OAUTH
===========================================================

Route::group([
    'after' => 'allowOrigin',
    'middleware' => [
        'web'
    ]
], function()
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
*/

/*
public function redirectToProviderFacebook()
{
    return Socialite::driver('facebook')->redirect();
}

public function handleProviderCallbackFacebook()
{
    $user = Socialite::driver('facebook')->user();
}

public function redirectToProviderTwitter()
{
    return Socialite::driver('twitter')->redirect();
}

public function handleProviderCallbackTwitter()
{
    $user = Socialite::driver('twitter')->user();
}

public function redirectToProviderGoogle()
{
    return Socialite::driver('google')->redirect();
}

public function handleProviderCallbackGoogle()
{
    $user = Socialite::driver('google')->user();
}

public function redirectToProvider()
{
    return Socialite::driver('github')->redirect();
}

public function handleProviderCallback()
{
    $user = Socialite::driver('github')->user();
}*/