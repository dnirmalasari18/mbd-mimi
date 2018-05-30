<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barang;
use App\KategoriBarang;
use App\Warna;
use App\Ukuran;
use App\Merk;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
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
		$this->validate($r,[
      		'nama' => 'required|string|max:150',
            'merk_id' => 'required',
			'warna_id' => 'required',
			'ukuran_id' => 'required',
			'kategori_barang_id' => 'required',
            'harga' => 'required|integer',
			'stok' => 'required|integer',
			'image'=>'image|mimes:jpeg,jpg,png|nullable',
      	]);
            $b = new Barang;
            $b->nama     = Input::get('nama');
            $b->merk_id = Input::get('merk_id');
            $b->warna_id = Input::get('warna_id'); 
			$b->ukuran_id=Input::get('ukuran_id');
			$b->kategori_barang_id = Input::get('kategori_barang_id');
			$b->harga = Input::get('harga');
			$b->stok = Input::get('stok');
		
			//Barang::create(Input::all());

            $b->save();
            return redirect('/barang')->with('message', 'Barang has been added!');  
    }
	
	public function barangDestroy(){
		$b =Barang::find(Input::get('barang_id'));
		//echo $b;
        $b->delete();
        return redirect('barang')->with('message', 'Barang has been deleted!');
	}
	
	public function barangEdit(){
		$barang = Barang::find(Input::get('barang_id'));
		return view('barang.edit')->with('barang',$barang);
	}
	
	public function barangUpdate($id,Request $r){
		$b = Barang::find($id);
		
		$b->nama     = Input::get('nama');
		$b->merk_id = Input::get('merk_id');
		$b->warna_id = Input::get('warna_id'); 
		$b->ukuran_id=Input::get('ukuran_id');
		$b->kategori_barang_id = Input::get('kategori_barang_id');
		$b->harga = Input::get('harga');
		$b->stok = Input::get('stok');
		
		$b->save();
		
		return redirect('barang');
	}
}
