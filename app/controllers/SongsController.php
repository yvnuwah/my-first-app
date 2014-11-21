<?php 

class SongsController extends \BaseController {

	public function index() {

		$songs = DB::table('songs')->get();

		return View::make('songs.index', compact('songs'));
	}

	public function show($id) {

		$song = DB::table('songs')->find($id);
		
		return View::make('songs.show', compact('song'));
	}


}
