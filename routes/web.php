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
Auth::routes(); //Rutas de Registro en una sola linea

Route::get('/auth/facebook', 'SocialAuthController@facebook');
Route::get('/auth/facebook/callback', 'SocialAuthController@callback');
Route::post('/auth/facebook/register', 'SocialAuthController@register');

Route::get('/', 'PagesController@home');

Route::get('/about','PagesController@about');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/messages','MessagesController@search');

Route::group(['middleware' => 'auth'], function() {
	Route::post('/{username}/dms','UsersController@sendPrivateMessage');
	Route::post('/messages/create','MessagesController@create');
	Route::post('/{username}/follow', 'UsersController@follow');
	Route::post('/{username}/unfollow', 'UsersController@unfollow');
	Route::get('/conversations/{conversation}', 'UsersController@showConversation');

});
Route::get('/message/{message}', 'MessagesController@show');

Route::get('/{username}/follows','UsersController@follows'); // A quien sigue el usuario
Route::get('/{username}/followers','UsersController@followers');

Route::get('/{username}','UsersController@show');
// Route::get('/home', 'HomeController@index')->name('home');
