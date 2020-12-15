<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Hamlet;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

// for tes
Route::get('/tes', function () {
    $user = User::find(2)->identity->hamlet_id;
    $hamlet = Hamlet::find($user)->number;

    dd($hamlet);
});
