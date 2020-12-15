<?php

Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/neighbour', 'NeighbourController@index')->name('neighbour');

Route::get('/hamlet', 'HamletController@index')->name('hamlet');

Route::get('/hamlet/data', 'DataController@hamlets')->name('hamlet.data');