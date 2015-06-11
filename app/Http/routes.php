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
Route::get('movies', 'moviesController@index');
Route::get('movies/{name}', 'moviesController@searchbymovie');

Route::get('cinemas', 'CinemasController@index');
//Route::get('cinemas/{name}', 'CinemasController@searchbycinema');
Route::get('cinemas/movies', 'CinemasController@movies');
Route::get('cinemas/movies/sessions', 'CinemasController@sessions');

Route::get('cinemas/sessions', 'CinemasController@sessions');
Route::get('cinemas/search', 'CinemasController@search');
Route::get('cinemas/searchresult', 'CinemasController@searchresult');

Route::resource('movies', 'moviesController',
                ['only' => ['index', 'searchresult']]);
				
Route::resource('cinemas', 'cinemasController',
				['only' => ['index', 'movies', 'sessions', 'search', 'searchresult', 'searchbycinema']]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
