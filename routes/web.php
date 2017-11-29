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

Route::get('/', function () {
	return view('welcome');
});

Route::group(['prefix' => 'sinh_vien'], function() {
	//student route
	Route::get('index', 'SinhVienController@index');

	Route::get('list', 'SinhVienController@getlist');

	Route::post('add', 'SinhVienController@getadd');

	Route::delete('delete/{id}','SinhVienController@delete');

	Route::post('update/{id}','SinhVienController@update');

	//class route
	Route::get('lop','LopController@index')->name('getAllop');

	Route::get('classinfo','LopController@getlist');


	Route::post('class_add', 'LopController@getadd');

	Route::delete('class_delete/{id}','LopController@delete');

	Route::post('class_update/{id}','LopController@update');

	//get layout
	Route::get('layout','FormController@getlayout');

	Route::get('modal','FormController@modal_add');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
