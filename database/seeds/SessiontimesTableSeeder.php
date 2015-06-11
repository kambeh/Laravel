<?php

use Illuminate\Database\Seeder;
use App\sessiontimes;

class SessiontimesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
		DB::table('sessiontimes')->delete();

		sessiontimes::create([
			'movie_id' => '1',
			'cinema_id' => '1',
			'session_dt' => '2015-06-11 14:30:00',
		]);
		
	}

}