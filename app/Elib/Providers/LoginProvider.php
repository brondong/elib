<?php namespace Elib\Providers;

use Illuminate\Support\ServiceProvider;
use Elib\Proses\Login;

class LoginProvider extends ServiceProvider {

  public function register()
  {
    $this->app->bind('login', function()
    {
      return new Login;
    });
  }

}