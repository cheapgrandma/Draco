<?php

Auth::routes();

Route::get('/home', 'HomeController@index');

//Account settings
Route::get('/account', 'AccountController@index');

