<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/neighbour', 'NeighbourController@index')->name('neighbour');

Route::get('/hamlet/user', 'HamletUserController@index')->name('hamlet.user.index');
Route::get('/hamlet/user/create', 'HamletUserController@create')->name('hamlet.user.create');
Route::post('/hamlet/user/store', 'HamletUserController@store')->name('hamlet.user.store');

Route::get('/hamlet/user/data', 'DataController@hamletUsers')->name('hamlet.user.data');