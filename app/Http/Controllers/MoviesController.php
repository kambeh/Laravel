<?php namespace App\Http\Controllers;
use App\Movies;
use App\Http\Request;
use App\Http\Controllers\Controller;
use Redirect, Input, Auth, DB;

class MoviesController extends Controller {

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

	public function searchbymovie($name) {
		$results = DB::select('select * from movies where title like ?', [$name]);
		$record = array_pop($results);
		$data['searchcnt'] = count($record);

		if(!empty($record))
		{
			$data['searchResult'] = array('name' => $record->id, 'address' => $record->title);			
		}
		else {
			$records = array();
			$records['name'] = '';
			$records['address'] = '';
			
			$data['searchResult'] = $records;			
		}

		return view('searchresult', $data);
	}
	
	
}
