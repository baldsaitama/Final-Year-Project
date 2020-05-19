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
	Route::resource('users', 'UsersController', ['as'=>'admin']);
	Route::resource('amenities', 'AmenitiesController', ['as'=>'admin']);
	Route::resource('properties', 'PropertiesController', ['as'=>'admin']);
});