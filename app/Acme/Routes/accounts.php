<?php

Route::post('accounts/verify-summoner', 'AccountController@verifySummoner');

Route::resource('accounts', 'AccountController');