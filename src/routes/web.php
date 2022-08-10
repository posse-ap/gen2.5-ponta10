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

Route::get('/home','HomeController@index');

Route::post('/store','HomeController@store')->name('store');
Route::post('/todo_store','HomeController@todo_store')->name('todo_store');
Route::post('/todo_update/{todo_id}','HomeController@todo_update')->name('todo_update');
Route::post('/todo_delete/{todo_id}','HomeController@todo_delete')->name('todo_delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/week/{id}', 'HomeController@week')->name('week');


