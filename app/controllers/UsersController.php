<?php

class UsersController extends BaseController {
    protected $layout = "layouts.main"; // <-- i don't understand what this does exactly 12/6/2014
    
    public function __construct() {
    	$this->beforeFilter('csrf', array('on'=>'post'));
    }

    // get the register page
    public function getRegister() {
        $this->layout->content = View::make('users.register');
    }
    
    // runs form input through validator. creates & inserts user into DB if successful. shows error messages if not.
    public function postCreate() {
    	$validator = Validator::make(Input::all(), User::$rules);

    	// i made a user with something@place.com, goodbye
    	if ($validator->passes()) {
    		// validation has passed, save user in DB
    		$user = new User;
    		$user->first_name = Input::get('first_name');
    		$user->last_name = Input::get('last_name');
    		$user->email = Input::get('email');
    		$user->password = Hash::make(Input::get('password'));
    		$user->save();

    		return Redirect::to('users/login')->with('message', '<div class="alert alert-success" role="alert">Thanks for registering!</div>');
    	}
    	else {
    		// validation has failed, display error messages
    		return Redirect::to('users/register')->with('message', '<div class="alert alert-warning" role="alert">The following errors occurred</div>')->withErrors($validator)->withInput();
    	}
    }

    // get the login page
    public function getLogin() {
    	// i don't understand the arguments in this make function. why aren't they more like getRegister()'s make()? 12/09/2014
    	//$this->layout->content = View::make('<span class="skimlinks-unlinked">users.login</span>');

    	$this->layout->content = View::make('users.login');
    }


}