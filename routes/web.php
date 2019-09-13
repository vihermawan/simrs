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

<<<<<<< HEAD
Route::get('/', 'MenuController@index')->name('main');

Route::get('/dashboard', 'DashboardController@tampilan');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
})->name('pendaftaran');

Route::get('/tes', 'MenuController@tes');
=======
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

>>>>>>> ea25a2d0bbe5f78f0e31fb734b7d8ebadf5df5a1
