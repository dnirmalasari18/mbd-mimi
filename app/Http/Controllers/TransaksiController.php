<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

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
        $transaksi = new Transaksi;

        $transaksi->m_id = Input::get('member_id');
        $transaksi->b_id = Input::get('barang_id');
        $transaksi->t_jumlah_barang = Input::get('t_jumlah_barang');    

        //Transaksi::create(Input::all());

        $transaksi->save();

        return redirect('transaksi');
    }

    public function transaksiDestroy(){
        $t =Transaksi::where('t_id',Input::get('transaksi_id'));
        $t->delete();
        return redirect('transaksi');
    }

    public function transaksiEdit(){
        $barang=Barang::all();
        $member=Member::all();
        $ukuran=Ukuran::all();
        $warna=Warna::all();
        $t =Transaksi::where('t_id',Input::get('transaksi_id'))->first();

        return view('transaksi.edit')->with('warna',$warna)->with('member',$member)->with('barang',$barang)->with('ukuran',$ukuran)->with('transaksi',$t);
    }

    public function transaksiUpdate($id){
        $t =Transaksi::where('t_id',$id)->first();

        /*$t->m_id = Input::get('m_id');
        $t->b_id = Input::get('b_id');
        $t->t_jumlah_barang = Input::get('t_jumlah_barang');*/

        DB::table('transaksi')->where('t_id',$id)->update([
            'm_id' => Input::get('member_id'),
            'b_id' => Input::get('barang_id'),
            't_jumlah_barang' => Input::get('t_jumlah_barang'),
        ]);

        return redirect('transaksi');
    }

    public function logTransaksi(){
        return view('transaksi.logTransaksi');
    }
}
