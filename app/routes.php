<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	return View::make('hello');
});


//Route::get('/', 'BootstrapTestController@index');

//Route::get('signup', 'BootstrapTestController@signup');

Route::get('signup', function()
{
	return View::make('signup');
});

Route::get('login', 'BootstrapTestController@login');

Route::get('songs', 'SongsController@index');
Route::get('songs/{id}', 'SongsController@show');
