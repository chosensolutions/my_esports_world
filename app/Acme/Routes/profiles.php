<?php

Route::get('search-profiles', 'ProfileController@search');

Route::get('profiles/auth', 'ProfileController@authProfile');

Route::resource('profiles', 'ProfileController');
