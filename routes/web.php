<?php


Route::get('/', 'HomeController@index');
Route::resource('/users', 'UsersController');
