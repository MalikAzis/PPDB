<?php

Route::group(['middleware' =>['api']], function(){

  Route::get('/register', 'registerController@register');
  Route::post('/register', 'registerController@store');

  Route::get('/data', 'registerController@data');
  Route::get('/data/{nomor_peserta}', 'registerController@show');

});
