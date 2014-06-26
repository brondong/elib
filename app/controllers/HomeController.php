<?php

class HomeController extends BaseController {

  /**
   * konstruktor
   */
  public function __construct()
  {
    $this->beforeFilter('auth');
  }

	/**
	 * home aplikasi
	 * 
	 * @return View
	 */
	public function index()
	{
		return View::make('pages.home');
	}

}