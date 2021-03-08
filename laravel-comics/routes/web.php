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

Route::get('/', 'PageController@home')->name('homepage');
Route::get('comics', 'PageController@comics')->name('comics');

Route::get('comic/{fumetto}', 'PageController@show')->name('comic');
/* Route::get('comic/{comic}', 'ComicController@show')->name('comic'); */

Route::resource('fumetti', 'ComicController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', 'AdminController@index')->name('home');
    Route::resource('comics', 'ComicController');
});