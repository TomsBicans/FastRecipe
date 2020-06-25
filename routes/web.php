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

Route::get('/', 'HomeController@main');

Route::get('/browse', 'SearchController@browse');
Route::get('/search', 'SearchController@search');
Route::post('/submit', 'SearchController@main');

Route::resource('recipe', 'RecipeController');

Route::get('recipe/{$id}', 'RecipeController@show')->name('recipe.show');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
