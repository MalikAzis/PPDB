<?php

Route::get('/', 'registerController@index');
Route::get('/register', 'registerController@register');
Route::post('/register', 'registerController@store');

Route::get('/status', 'statusController@index');
Route::post('/status', 'RegisterController@show');
