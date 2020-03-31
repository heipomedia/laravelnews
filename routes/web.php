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

/* Routes für die News */
Route::get('news/new', 'NewsController@create')->middleware('auth');
Route::post('news/new', 'NewsController@save')->middleware('auth');

/* Routes für die Kategorien */
Route::get('category/new', 'CategoryController@create')->middleware('auth');
Route::post('category/new', 'CategoryController@save')->middleware('auth');

/* Routes für die News-Ausgabe */
Route::get('', 'NewsController@overview');
Route::get('news/{id}', 'NewsController@view')->name('news');

/* Routes für die Auth-Funktionen wie Registrierung und Login */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
