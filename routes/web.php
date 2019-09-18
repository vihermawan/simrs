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
// <<<<<<< HEAD

Route::get('/keuangan',function(){
    return view('keuangan');
})->name('keuangan');
// =======
Route::get('/keuangan',function(){
    return view('keuangan');
})->name('keuangan');

// >>>>>>> 9bc3cf4fb97911471eb0722d2462c682bc3d34d5
Route::get('/inap', function () {
    return view('inap');
})->name('inap');
Route::get('/jalan', function () {
    return view('jalan');
})->name('jalan');
Route::get('/obat', function () {
    return view('obat');
})->name('obat');
Route::get('/penyakit', function () {
    return view('penyakit');
})->name('penyakit');
