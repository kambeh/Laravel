<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessiontimes extends Model {
    // declare default table for this class
	protected $table = 'sessiontimes';
	
	//disable timestamps columns in database table
	public $timestamps = false;
}
