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
    return view('home');
});
Route::get('/barang','BarangController@barangIndex' );
Route::get('/barang/merk/{namamerk}','BarangController@barangMerk' );
Route::get('/barang/warna/{namawarna}','BarangController@barangWarna' );
Route::get('/barang/ukuran/{namaukuran}','BarangController@barangUkuran' );
Route::get('/barang/kategori/{namakategori}','BarangController@barangKategori' );
Route::get('barang/addBarang','BarangController@barangAdd');
Route::post('barang/addBarang/create','BarangController@barangStore');
Route::get('/deleteBarang', 'BarangController@barangDestroy');
Route::get	('/editBarang', 'BarangController@barangEdit');
Route::put('/editBarang/update/{id}', 'BarangController@barangUpdate')->name('updateBarang');


Route::get('/member','MemberController@memberIndex');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

