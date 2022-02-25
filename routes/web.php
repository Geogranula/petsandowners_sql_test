<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PetsController@index');
// Route::get('/', 'App\Http\Controllers\PetsController@index');


// Route::get('/movies/create', 'MovieController@create');
// Route::get('/movies/{id}', 'MovieController@show');
// Route::post('/movies/store', 'MovieController@store');
// Route::delete('movies/{id}', 'MovieController@delete');
// Route::get('movies/{id}/edit', 'MovieController@edit');
// Route::put('movies/{id}', 'MovieController@update');

// Route::get('/search', 'MovieController@search');
// Route::get('/top-rated-movies', 'MovieController@topRated');
// Route::get('/movies/shawshank-redemption', 'MovieController@topRated');

// Route::get('/top-rated-games', 'VideogameController@topRated');

// Route::post('/movies/rate', 'ReviewController@store');
// Route::get('/movies/rate', 'ReviewController@rate');

// Route::get('/about-us', 'AboutController@aboutUs');

