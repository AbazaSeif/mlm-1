<?php


Route::get('adminlogin', 'LoginController@login');
Route::post('checkLogin', 'LoginController@checkLogin');

Route::group(['middleware' => 'adminAuth'], function () {
Route::get('subadmin', 'SuperAdminController@dashboard');
Route::get('packegIndex', 'SuperAdminController@dashboard');

	});