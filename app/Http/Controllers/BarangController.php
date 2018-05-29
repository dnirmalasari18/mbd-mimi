<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function barangIndex(){
    	$barang=Barang::all();
    	return view('barang.index')->with('barang',$barang);
    }

    public function barangMerk(){

    }

    public function barangUkuran(){

    }

    public function barangWarna(){

    }

    public function barangKategori(){

    }

    public function barangShow(){
    	$barang=Barang::find($id);
    }
}
