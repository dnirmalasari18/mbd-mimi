<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
class TransaksiController extends Controller
{
    //
    public function transaksiIndex(){
    	$transaksi=Transaksi::all();
    	return view('transaksi.index')->with('transaksi',$transaksi);
    }

    public function transaksiAdd(){
        return view('transaksi.addTransaksi');
    }

    public function transaksiStore(Request $r){

    }

    public function transaksiDestroy(){

    }

    public function transaksiEdit(){

    }

    public function transaksiUpdate(){

    }

    public function logTransaksi(){
      
    }
}
