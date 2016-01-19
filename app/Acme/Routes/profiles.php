<?php

Route::get('profiles/auth', 'ProfileController@authProfile');

Route::resource('profiles', 'ProfileController');
