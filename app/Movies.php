<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model {
    // declare default table for this class
	protected $table = 'movies';
		
	//disable timestamps columns in database table
	public $timestamps = false;
	
	public function get_all_records()
    {
        return Movies::all();
    }
	
	public function get_records_byId($id)
    {
        return Movies::find($id);
    }	
}
