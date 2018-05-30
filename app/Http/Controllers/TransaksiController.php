<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Barang;
use App\Ukuran;
use App\Member;
use App\Warna;
class TransaksiController extends Controller
{
    //
    public function transaksiIndex(){
    	$transaksi=Transaksi::all();
    	return view('transaksi.index')->with('transaksi',$transaksi);
    }

    public function transaksiAdd(){
        $barang=Barang::all();
        $member=Member::all();
        $ukuran=Ukuran::all();
        $warna=Warna::all();
        return view('transaksi.addTransaksi')->with('warna',$warna)->with('member',$member)->with('barang',$barang)->with('ukuran',$ukuran);
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
        return view('transaksi.logTransaksi');
    }
}
