<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionTimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('SessionTimes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('movie_id');	
			$table->string('cinema_id');			
			$table->datetime('session_dt');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('SessionTimes');
	}

}