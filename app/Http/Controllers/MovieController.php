<?php namespace App\Http\Controllers;
use App\Movies;
use App\Http\Request;
use App\Http\Controllers\Controller;
use Redirect, Input, Auth;

class MovieController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Movie Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

	}

	/**
	 * Show the application index page.
	 *
	 * @return Response view page
	 */
	public function index()
	{
		return view('Movie')->withPages(Movies::all());
	}


}
