<?php

// just testing shit here
Route::post('test', function() {
    return redirect()->away('https://www.facebook.com/');
});