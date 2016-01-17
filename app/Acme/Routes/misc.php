<?php

// just testing shit here
Route::get('test', function() {
    return redirect()->away('https://www.dropbox.com');
});