<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cinemas extends Model {
    // declare default table for this class
	protected $table = 'cinemas';
	
	//disable timestamps columns in database table
	public $timestamps = false;
	
    // public function cinemas()
    // {
        // //return $this->hasManyThrough('App\movies', 'App\sessiontimes');
    // }	
}
