<?php

class BootstrapTestController extends \BaseController {

	public function index()
	{
		return View::make('bootstraptest.home');
	}

	public function signup()
	{
		return View::make('signup');
	}

	public function login()
	{
		return View::make('login');
	}


}
