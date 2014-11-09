<?php

Route::get('/', function() {
	return View::make('singlepage');
});

Route::get('/books', array('before' => 'auth', function() {
  return Response::json(array(
    array('title' => 'Great Expectations', 'author' => 'Dickens'),
    array('title' => 'Foundation', 'author' => 'Asimov'),
    array('title' => 'Treasure Island', 'author' => 'Stephenson')
  ));

  // return Response::json(array('flash' => 'Session expired'), 401);
}));

Route::post('/auth/login', array('before' => 'csrf_json', 'uses' => 'AuthController@login'));
Route::get('/auth/logout', 'AuthController@logout');
Route::get('/auth/status', 'AuthController@status');
Route::get('/auth/secrets','AuthController@secrets');

/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////

Route::get('/home', function()
{
    return View::make('index');
});

Route::group(['prefix' => 'api/v1/', 'after' => 'allowOrigin'], function()
{
    // requires all the routes file from Acme/Routes folder
    foreach (File::allFiles(__DIR__.'/Acme/Routes') as $partial)
    {
        require_once $partial->getPathname();
    }
});