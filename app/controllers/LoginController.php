<?php

class LoginController extends BaseController {

  /**
   * konstruktor
   */
  public function __construct()
  {
    
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
  }

}