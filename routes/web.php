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
	Route::get('/properties/search', [
		'as' => 'properties.search',
		'uses' => 'PropertiesController@search'
	]);
    Route::get('/properties/buy-rent', [
        'as' => 'properties.buy-rent',
        'uses' => 'PropertiesController@buyrent'
    ]);
	Route::get('/properties/{property}/show', [
		'as' => 'properties.showProperty',
		'uses' => 'PropertiesController@showProperty'
	]);

});

Auth::routes(['verify' => true]);
Route::group(['middleware' => 'verified'], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::group(['namespace' => 'General'], function(){
		Route::resource('users','UsersController');
		//PropertiesCOntroller
		// Route::get('/properties/buy-rent', [
		// 	'as' => 'properties.search',
		// 	'uses' => 'PropertiesController@search'
		// ]);
		Route::get('properties/{property}/images/get-images-lists', [
			'as' => 'properties.getImagesLists',
			'uses' => 'PropertiesController@getImagesLists'
		]);

		Route::post('properties/{property}/images', [
			'as' => 'properties.uploadImage',
			'uses' => 'PropertiesController@uploadImage'
		]);

		Route::delete('properties/{property}/images/{image}', [
			'as' => 'properties.deleteImage',
			'uses' => 'PropertiesController@deleteImage'
		]);
		Route::resource('properties','PropertiesController');
		//
		Route::resource('profiles','ProfilesController');
		Route::resource('bookings','BookingsController');

		Route::get('amenities/get-lists', [
			'as' => 'amenities.getLists',
			'uses' => 'AmenitiesController@getLists'
		]);

		Route::get('amenities/get-lists/{amenity}', [
			'uses' => 'AmenitiesController@getList'
		]);
    });

});

