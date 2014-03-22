<?php

class LoginController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public $restful = true;

	public function login() {
		return View::make('worker.worker',  array('pagetitle', 'Worker Hub'));
	}

	public function create_worker_login() {
	Login::create(array(
		'username' => Input::get('username'),
		'password' => Input::hash('password'),
		));
	return Redirect::route('');

	}

}