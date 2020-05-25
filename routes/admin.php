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

Route::get('/logout', [
    'as'=>'admin.logout',
    'uses' => 'AuthController@logout',
]);

Route::group(['middleware' => 'verified'], function(){
    Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
    
    //userscontroller
    Route::get('users/get-lists', [
		'as' => 'admin.users.getLists',
		'uses' => 'UsersController@getLists'
	]);

	Route::get('users/get-lists/{user}', [
		'as' => 'admin.users.getList',
		'uses' => 'UsersController@getList'
	]);
	Route::resource('users', 'UsersController', ['as'=>'admin']);
	//AMenitiesController
	Route::get('amenities/get-lists', [
		'as' => 'admin.amenities.getLists',
		'uses' => 'AmenitiesController@getLists'
	]);

	Route::get('amenities/get-lists/{amenity}', [
		'uses' => 'AmenitiesController@getList'
	]);

    Route::resource('amenities', 'AmenitiesController', ['as'=>'admin']);
    //PropertiesController
    Route::get('properties/{property}/images/get-images-lists', [
		'as' => 'admin.properties.getImagesLists',
		'uses' => 'PropertiesController@getImagesLists'
	]);

	Route::post('properties/{property}/images', [
		'as' => 'admin.properties.uploadImage',
		'uses' => 'PropertiesController@uploadImage'
    ]);

    Route::delete('properties/{property}/images/{image}', [
		'as' => 'admin.properties.deleteImage',
		'uses' => 'PropertiesController@deleteImage'
	]);
    
	Route::resource('properties', 'PropertiesController', ['as'=>'admin']);
});