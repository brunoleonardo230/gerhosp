<?php

// Login routes
Route::get('/', 'LoginController@index');
Route::post('/login', 'LoginController@auth');
Route::get('/logout', 'LoginController@logout');

//Home routes
Route::get('/home', 'HomeController@index');
