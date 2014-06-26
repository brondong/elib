<?php

class HomeController extends BaseController {

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