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

Route::get('/', 'PagesController@home');

Route::get('/about','PagesController@about');

Auth::routes(); //Rutas de Registro en una sola linea

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/message/{message}', 'MessagesController@show');

Route::post('messages/create','MessagesController@create');


// Route::get('/home', 'HomeController@index')->name('home');
