<?php

use Illuminate\Database\Seeder;
use App\cinemas;

class CinemasTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
		DB::table('cinemas')->delete();

		cinemas::create([
			'name' => 'Cinema 1',
			'address' => 'The address of cinema 1',
			'geo_loc' => '33.2456/35.0079'
		]);
		
		cinemas::create([
			'name' => 'Cinema 2',
			'address' => 'The address of cinema 2',
			'geo_loc' => '33.2768/35.2125'
		]);
		
		cinemas::create([
			'name' => 'Cinema 3',
			'address' => 'The address of cinema 3',
			'geo_loc' => '33.3567/35.1034'
		]);
	}

}
