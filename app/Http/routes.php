<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//frontend route
Route::get('/', 'RegisterController@index');
Route::get('register','RegisterController@show');
Route::post('register','RegisterController@login');
Route::get('register/user','RegisterController@create');
Route::post('register/user','RegisterController@store');
Route::get('register/contact','RegisterController@contact');
Route::get('register/about','RegisterController@about');
Route::get('register/logout', 'RegisterController@logout');
Route::get('register/profile','RegisterController@profile');
Route::post('register/profile','RegisterController@profileUpdate');
Route::get('register/success','RegisterController@success');

//Backend route
Route::resource('/user','UserController');
Route::resource('role','RoleController');
Route::get('admin','LoginController@index');
Route::post('admin','LoginController@store');
Route::get('/admin/dashboard','AdminController@index');
Route::get('/admin/logout','AdminController@logout');
Route::get('admin/users','AdminController@listUsers');
Route::get('admin/users/{any}','AdminController@show');

Route::resource('ercas', 'ErcasController');