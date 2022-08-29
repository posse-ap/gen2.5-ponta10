<?php

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

use Symfony\Component\Routing\Router;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    Mail::to('test@example.com')->send(new Test);
    return 'メール送信しました！';
});

Route::get('/home', 'HomeController@index');

Route::post('/store', 'HomeController@store')->name('store');
Route::post('/todo_store', 'HomeController@todo_store')->name('todo_store');
Route::post('/todo_update/{todo_id}', 'HomeController@todo_update')->name('todo_update');
Route::post('/todo_delete/{todo_id}', 'HomeController@todo_delete')->name('todo_delete');
Route::post('/language_delete/{language_id}', 'HomeController@language_delete')->name('language_delete');
Route::post('/week_store', 'HomeController@week_store')->name('week_store');
Route::post('/month_store', 'HomeController@month_store')->name('month_store');
Route::post('/language_store', 'HomeController@language_store')->name('language_store');
Route::post('/pokemon_store', 'PokemonController@pokemon_store')->name('pokemon_store');
Route::post('/hand_store', 'PokemonController@hand_store')->name('hand_store');


Auth::routes();

Route::get('/home/{id}', 'HomeController@index')->name('home');
Route::get('/week/{id}', 'HomeController@week')->name('week');
Route::get('/language/{language_id}', 'LanguageController@index')->name('language');
Route::get('/pokemon/country', 'PokemonController@index')->name('pokemon.country');
Route::get('/pokemon/select/{id}', 'PokemonController@select')->name('pokemon.select');
Route::get('/pokemon/hand', 'PokemonController@hand')->name('pokemon.hand');
Route::get('/pokemon/box/{id}', 'PokemonController@box')->name('pokemon.box');
Route::get('/pokemon/trainig/{id}', 'PokemonController@training')->name('pokemon.training');
