<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/neighbour', 'NeighbourController@index')->name('neighbour');

Route::get('/user/hamlet', 'UserController@indexHamlet')->name('user.hamlet');
Route::get('/user/hamlet/create', 'UserController@createHamlet')->name('user.hamlet.create');
Route::post('/user/hamlet/store', 'UserController@storeHamlet')->name('user.hamlet.store');
Route::get('/user/hamlet/{hamlet}/edit', 'UserController@editHamlet')->name('user.hamlet.edit');

Route::get('/user/hamlet/data', 'DataController@userHamlets')->name('user.hamlet.data');