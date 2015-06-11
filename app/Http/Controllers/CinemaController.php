<?php namespace App\Http\Controllers;
use App\Movies;
use App\Cinemas;
use App\Sessiontimes;
use App\Http\Request;
use App\Http\Controllers\Controller;
use Redirect, Input, Auth;

class CinemaController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Cinema Controller
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
		return view('Cinemas')->withPages(Cinemas::all());
	}
	
	public function find()
	{
		return view('Cinemas')->withPages(Page::find(1));
	}
	
	public function movies()
	{
		return view('Movie')->withPages(Movies::all());
	}
	
	public function sessions()
	{
		return view('Sessiontimes')->withPages(Sessiontimes::all());
	}

}
