<?php

Route::get('/', function()
{
	return View::make('hello');
});

// login
Route::get('login', array(
  'as'   => 'login',
  'uses' => 'LoginController@form'
));
Route::post('login', array(
  'uses' => 'LoginController@proses'
));
// end of login