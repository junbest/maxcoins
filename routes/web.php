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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/deposit', 'HomeController@deposit')->name('deposit');
Route::get('/withdraw', 'HomeController@withdraw')->name('withdraw');
Route::get('/send', 'HomeController@send')->name('send');
Route::get('/crypto', 'HomeController@crypto')->name('crypto');
Route::get('/setting', 'HomeController@setting')->name('setting');
