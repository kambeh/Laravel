<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');
Route::get('movie', 'MovieController@index');

Route::get('cinema', 'CinemaController@index');
Route::get('cinema/movies', 'CinemaController@movies');
Route::get('cinema/movies/sessions', 'CinemaController@sessions');

Route::get('cinema/sessions', 'CinemaController@sessions');

Route::resource('movie', 'movieController',
                ['only' => ['index']]);
				
Route::resource('cinema', 'cinemaController',
				['only' => ['index', 'movies', 'sessions']]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
