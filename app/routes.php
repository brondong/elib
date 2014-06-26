<?php

// home
Route::get('/', array(
  'as'   => 'home',
  'uses' => 'HomeController@index'
));
// end of home

// login
Route::get('login', array(
  'as'   => 'login',
  'uses' => 'LoginController@form'
));
Route::post('login', array(
  'uses' => 'LoginController@proses'
));
// end of login

// logout
Route::get('logout', array(
  'as'   => 'logout',
  'uses' => 'LoginController@logout'
));
// end of logout