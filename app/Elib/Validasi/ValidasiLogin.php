<?php namespace Elib\Validasi;

class ValidasiLogin extends Validasi {

  /**
   * rules validasi login
   * 
   * @var array
   */
  protected static $rules = array(
    'email'    => 'required|max:50|email|exists:users,email',
    'password' => 'required'
  );

}