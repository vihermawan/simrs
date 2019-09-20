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

Route::get('/', 'MenuController@index')->name('main');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/pendaftaran', 'PendaftaranController@index');

Route::get('/penyakit','PenyakitController@index');

Route::get('/obat', 'ObatController@index');

Route::get('/tes', 'MenuController@tes');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/signin', function () {
    return view('signin');
})->name('signin');
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
})->name('pendaftaran');

Route::get('/keuangan',function(){
    return view('keuangan');
})->name('keuangan');
Route::get('/keuangan',function(){
    return view('keuangan');
})->name('keuangan');

Route::get('/inap', function () {
    return view('inap');
})->name('inap');
Route::get('/jalan', function () {
    return view('jalan');
})->name('jalan');

Route::get('/obat', 'ObatController@index');
Route::get('/penyakit', 'PenyakitController@index');
Route::get('/resep', 'ResepController@index');
