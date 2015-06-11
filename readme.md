## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Added database migrations files
  - \database\migrations\2015_06_10_104406_create_cinemas_table.php
  - \database\migrations\2015_06_10_104506_create_movies_table.php
  - \database\migrations\2015_06_10_104606_create_sessiontimes_table.php
	
### Added database table seeders
  - \My_laravel\database\seeds\CinemasTableSeeder.php
  - \My_laravel\database\seeds\MoviesTableSeeder.php
  - \My_laravel\database\seeds\SessiontimesTableSeeder.php
  
### Create database table and loading data using artisan CLI commands
  * php artisan migrate
  * composer dump-autoload
  * php artisan db:seed 
	
### Modified skeleton code to suit the cinema guide application
* Modified code
  - .env.ENV
  - \My_laravel\database\seeds\DatabaseSeeder.php
  
* Added views
  - \resources\views\cinemas.blade
  - \resources\views\movie.blade
  - \resources\views\sessiontimes.blade
  
* Added controllers
  - \app\Http\Controllers\CinemaController.php
  - \app\Http\Controllers\MovieController.php
  
* Added models
  - \app\Cinemas.php
  - \app\Movies.php
  - \app\Sessiontimes.php
  
* Modified code
  - \My_laravel\database\seeds\DatabaseSeeder.php
  - \app\Http\Controllers\HomeController.php
  - \app\Http\routes.php