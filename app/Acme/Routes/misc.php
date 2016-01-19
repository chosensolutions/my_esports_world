<?php

Route::get('test', function() {

    return redirect()->away('https://www.facebook.com/', 302, [
        'Access-Control-Allow-Origin' => '*',
        'Access-Control-Allow-Methods' => 'GET, POST, PATCH, PUT, DELETE, OPTIONS',
        'Access-Control-Allow-Headers' => 'Origin, Content-Type, X-Auth-Token'
    ]);
});


Route::get('summoner/{summoner_name}', function($summoner_name)
{
    $api_key = "3a0230a5-4e25-480d-bab5-e8154d3107f9";
    $client = new GuzzleHttp\Client();
    $request = $client->get("https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/$summoner_name?api_key=$api_key");
    $contents = $request->getBody()->getContents();
    $summoner = json_decode($contents, true)[$summoner_name];

    $summoner_id = $summoner['id'];
    $request = $client->get("https://na.api.pvp.net/api/lol/na/v1.4/summoner/$summoner_id/runes?api_key=$api_key");
    $contents = $request->getBody()->getContents();
    $summoner_rune_pages = json_decode($contents, true)[$summoner_id]['pages'];

    //$request = $client->get("https://na.api.pvp.net/api/lol/na/v1.3/stats/by-summoner/$summoner_id/ranked?api_key=$api_key");
    //$contents = $request->getBody()->getContents();
    $summoner_stats_ranked = json_decode($contents, true);

    //$request = $client->get("https://na.api.pvp.net/api/lol/na/v1.3/stats/by-summoner/$summoner_id/summary?api_key=$api_key");
    //$contents = $request->getBody()->getContents();
    $summoner_stats_summary = json_decode($contents, true);

    //$request = $client->get("https://na.api.pvp.net/api/lol/na/v2.5/league/by-summoner/$summoner_id/entry?api_key=$api_key");
    //$contents = $request->getBody()->getContents();
    $summoner_league_entry = json_decode($contents, true)[$summoner_id];

    $data = [
        'summoner_info' => $summoner,
        'run_pages' => $summoner_rune_pages,
        //'summoner_league_entry' => $summoner_league_entry
    ];

    return $data;
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