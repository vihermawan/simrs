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
Auth::routes();

Route::middleware(['guest'])->group(function () {
Route::get('/', 'MenuController@index');

  // modul dashboard
  Route::get('dashboard', 'Dashboard\DashboardController@index')->name('hello');

  // modul pendaftaran
  Route::get('pendaftaran', 'Pendaftaran\PendaftaranController@index');

  Route::get('create','Pendaftaran\PendaftaranController@create')->name('create');

  Route::delete('pendaftaran/{id}', 'Pendaftaran\PendaftaranController@destroy')->name('pendaftaran.destroy');

  // modul pasien
  Route::get('pasien', 'Pasien\PasienController@index');
  Route::delete('pasien/{id}', 'Pasien\PasienController@destroy')->name('pasien.destroy');

  // modul rawat inap
  Route::get('pasien-rawat', 'RawatInap\PasienRawatController@index');

  Route::get('pasien-keluar', 'RawatInap\PasienKeluarController@index');

  Route::get('ruang', 'RawatInap\RuangController@index');

  Route::get('pemeriksaan-harian', 'RawatInap\PemeriksaanHarianController@index');

  // modul rawat jalan
  Route::get('rawat-jalan/pasien', 'RawatJalan\PasienController@index');

  Route::get('rawat-jalan/tindakan', 'RawatJalan\TindakanController@index');

  // modul keuangan
  Route::get('transaksi-inap', 'Keuangan\TransaksiInapController@index');

  Route::get('transaksi-jalan', 'Keuangan\TransaksiJalanController@index');

  // modul lainnya
  Route::get('penyakit', 'Lainnya\PenyakitController@index');

  Route::get('obat', 'Lainnya\ObatController@index');
  Route::post('obat', 'Lainnya\ObatController@store');
  
  

  Route::get('resep', 'Lainnya\ResepController@index');

  // modul setting
  Route::get('role', 'Setting\RoleController@index');

  Route::get('user', 'Setting\UserController@index');

  Route::get('edit-password', 'Setting\EditPasswordController@index');

  Route::get('profile', 'Setting\ProfileController@index');
});
