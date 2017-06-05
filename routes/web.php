<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('admin', function () {
    return view('backend.body');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
