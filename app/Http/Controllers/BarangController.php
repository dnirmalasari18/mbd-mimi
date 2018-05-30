<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barang;
use App\KategoriBarang;
use App\Warna;
use App\Ukuran;
use App\Merk;

class BarangController extends Controller
{
    //
    public function barangIndex(){
    	$barang=Barang::all();
    	return view('barang.index')->with('barang',$barang);
    }

    public function barangMerk($namamerk){
    	$barang= Merk::where('nama_merk',$namamerk)->first()->barang;
        return view('barang.index')->with('barang',$barang);
    }

    public function barangUkuran($namaukuran){
    	$barang= Ukuran::where('ukuran',$namaukuran)->first()->barang;
        return view('barang.index')->with('barang',$barang);
    }

    public function barangWarna($namawarna){
    	$barang= Warna::where('nama_warna',$namawarna)->first()->barang;
        return view('barang.index')->with('barang',$barang);
    }

    public function barangKategori($namakategori){
    	$barang= KategoriBarang::where('nama_kategori',$namakategori)->first()->barang;
    	return view('barang.index')->with('barang',$barang);
    }

    public function barangShow(){
    	$barang=Barang::find($id);
    }

    public function barangAdd(){
        return view('barang.addBarang');
    }
    
    public function barangStore(Request $r){
        echo "hehe";
    }
}
