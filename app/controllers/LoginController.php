<?php

class LoginController extends BaseController {

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
   * @return json
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

}