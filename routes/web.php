<?php

Route::get('/', 'registerController@index');
Route::get('/register', 'registerController@register');
Route::post('/register', 'registerController@store');
