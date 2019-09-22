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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kirimemail', 'Belajarkoding0Controller@index');

Auth::routes();

// route untuk verifikasi
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
