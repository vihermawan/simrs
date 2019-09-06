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

})->name('home');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/signin', function () {
    return view('signin');
})->name('signin');
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
})->name('pendaftaran');

<<<<<<< HEAD
Route::get('/keuangan',function(){
    return view('keuangan');
})->name('keuangan');

=======
Route::get('/inap', function () {
    return view('inap');
})->name('inap');

Route::get('/jalan', function () {
    return view('jalan');
})->name('jalan');
<<<<<<< HEAD
Route::get('/obat', function () {
    return view('obat');
})->name('obat');
Route::get('/penyakit', function () {
    return view('penyakit');
})->name('penyakit');
=======
>>>>>>> f6642cd199109f98cea1137e7684b0f5af6be7ca
>>>>>>> 52524dc964dc5d33dc86d023b10a05fc3177eb9a
