<?php

// just testing shit here
Route::get('test', function() {

    //Auth::loginUsingId(1);

/*    Auth::attempt([
        'email' => 'test@test.com',
        'password' => 'password'
    ]);*/
    return (Auth::user());
});