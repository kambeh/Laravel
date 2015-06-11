<?php namespace App\Http\Controllers;
use App\Movies;
use App\Cinemas;
use App\Sessiontimes;
use App\Http\Request;
use App\Http\Controllers\Controller;
use Redirect, Input, Auth, DB;

class CinemasController extends Controller {

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
	
	public function movies()
	{
		return view('Movie')->withPages(Movies::all());
	}
	
	public function sessions()
	{
		return view('Sessiontimes')->withPages(Sessiontimes::all());
	}
	
	public function searchbycinema($name) {
		if($name == "search") {
			return view('searchform');
			//return Redirect::to('cinemas/search');
		}
		elseif($name == "movies") {
			return view('Movie')->withPages(Movies::all());
		}
		else {
			$results = DB::select('select * from cinemas where name like ?', [$name]);
			$record = array_pop($results);
			$data['searchcnt'] = count($record);
			print_r($record);
	
			if(!empty($record))
			{
				$data['searchResult'] = array('name' => $record->name, 'address' => $record->address);			
			}
			else {
				$records = array();
				$records['name'] = '';
				$records['id'] = '';
				$records['address'] = '';
				
				$data['searchResult'] = $records;			
			}

			return view('searchresult', $data);
		}
	}

	public function search()
	{
		return view('searchform');
	}
	
	/**
	 * Search function
	 *
	 * @return Response view page
	 */
	public function searchresult()
	{
		$id = input::get('id');
		$searchModel = new Cinemas;
		$records = $searchModel->get_records_byId($id);
		$data['searchcnt'] = count($records);
				
		if(!empty($records))
		{
			$records = $records->toArray();
		}
		else {
			$records = array();
			$records['name'] = "No record found.";
			$records['id'] = '';
			$records['address'] = '';
		}
		
		//print_r($records);

		$data['searchResult'] = $records;
		
		return view('searchresult', $data);
	}
	
}
