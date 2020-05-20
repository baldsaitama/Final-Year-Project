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
Route::group(['namespace' => 'General'], function(){
	Route::get('/', 'WelcomeController@index')->name('welcome');

});

Auth::routes(['verify' => true]);
Route::group(['middleware' => 'verified'], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::group(['namespace' => 'General'], function(){
		Route::resource('users','UsersController');
    });
    Route::get('/create', 'Admin\PropertiesController@create')->name('create');
});

