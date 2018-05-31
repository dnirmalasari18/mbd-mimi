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

//barang
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
Route::get('barang/log','BarangController@logBarang');
//yang belum function, procedure, index, join, cursor




//transaksi
Route::get('transaksi','TransaksiController@transaksiIndex');
Route::get('transaksi/addTransaksi','TransaksiController@transaksiAdd');
Route::post('transaksi/addTransaksi/create','TransaksiController@transaksiStore');
Route::post('transaksi/edit/{id}','TransaksiController@transaksiUpdate');
Route::get('transaksi/edit','TransaksiController@transaksiEdit');
Route::get('transaksi/delete','TransaksiController@transaksiDestroy');

Route::get('/member','MemberController@memberIndex');

Route::get('search',function() {
	$listBarang = App\Barang::select('barang.*')
	->join('warna','barang.w_id','=','warna.w_id')
	->join('merk','barang.me_id','=','merk.me_id')
	->join('ukuran','barang.w_id','=','ukuran.u_id')
	->join('kategori_barang','barang.kb_id','=','kategori_barang.kb_id')
	->where('barang.b_nama','like','%'.Illuminate\Support\Facades\Input::get('query').'%')
	->orWhere('warna.w_nama','like','%'.Illuminate\Support\Facades\Input::get('query').'%')
	->orWhere('merk.me_nama','like','%'.Illuminate\Support\Facades\Input::get('query').'%')
	->orWhere('ukuran.u_nama','like','%'.Illuminate\Support\Facades\Input::get('query').'%')
	->orWhere('kategori.kb_nama','like','%'.Illuminate\Support\Facades\Input::get('query').'%')->pluck();

	//var_dump($listBarang);

	foreach ($listBarang as $barang) {
		var_dump($barang);
		echo "<br><br>";
	}
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
