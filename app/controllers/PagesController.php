<?php

class PagesController extends \BaseController {

	public function index() {

		$lessons = ['My First Lesson', 'My Second Lesson', 'My Third Lesson'];
		return View::make('pages.home', compact('lessons'));
	}

	public function about() {
		return 'Learn a little about me';
	}


}
