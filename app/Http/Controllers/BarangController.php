<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function barangIndex(){

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
