<?php namespace Elib\Proses;

use Input;

class Login {

  /**
   * cek proses login
   * 
   * @return bool
   */
  public function cek()
  {
    // input
    $email    = Input::get('email');
    $password = Input::get('password');
    $ingat    = (Input::get('ingat') == 1) ? true : false;
    $data     = compact('email', 'password');

    // login cocok
    if (\Auth::attempt($data, $ingat)) return true;

    // login tidak cocok
    return false;
  }

}