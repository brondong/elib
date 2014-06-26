<?php namespace Elib\Facades;

use Illuminate\Support\Facades\Facade;

class LoginFacade extends Facade {

  protected static function getFacadeAccessor()
  {
    return 'login';
  }

}