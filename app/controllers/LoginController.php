<?php

class LoginController extends BaseController {

  /**
   * konstruktor
   */
  public function __construct()
  {
    $this->beforeFilter('csrf', array('on' => 'post'));
  }

  /**
   * form login
   * 
   * @return View
   */
  public function form()
  {
    return View::make('form.login');
  }

  /**
   * proses login
   * 
   * @return Redirect
   */
  public function proses()
  {
    // ambil semua input
    $input = Input::all();

    // input tidak valid
    if (! ValidasiLogin::cek($input))
    {
      return Redirect::back()
        ->withInput()
        ->withErrors( ValidasiLogin::errors() );
    }

    // login gagal
    if (! Login::cek())
    {
      return Redirect::back()
        ->withInput()
        ->withErrors( array('password' => 'Password tidak cocok.') );
    }

    return Redirect::route('home');
  }

  /**
   * logout user
   * 
   * @return Redirect
   */
  public function logout()
  {
    Auth::logout();

    return Redirect::route('login');
  }

}