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
    
  }

}