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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/level', 'HomeController@level');

Route::post('/level', 'LevelController@store')->name('store.level');
Route::delete('/level/{id}', 'LevelController@delete')->name('delete.level');

Route::post('/card', 'CardController@store')->name('store.card');
Route::get('/card/{id}', 'CardController@edit')->name('edit.card');
Route::put('/card/{id}', 'CardController@update')->name('update.card');
Route::delete('/card', 'CardController@delete')->name('delete.card');

Route::get('/score', 'HomeController@score')->name('score');
