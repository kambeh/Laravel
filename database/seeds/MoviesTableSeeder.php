<?php

use Illuminate\Database\Seeder;
use App\movies;

class MoviesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
		DB::table('movies')->delete();

		movies::create([
			'title' => 'ALOHA',
		]);
		
		movies::create([
			'title' => 'Hot Pursuit',
		]);

		movies::create([
			'title' => 'Minions',
		]);		
		
	}

}
