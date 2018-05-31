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
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    //
    public function barangIndex(){
    	$barang = Barang::all();

        /*foreach ($barang as $b) {
            var_dump($b->merk);
            echo "<br><br>";
        }*/

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
        $merk=Merk::all();
        $ukuran=Ukuran::all();
        $warna=Warna::all();
        $kategori = KategoriBarang::all();

        return view('barang.addBarang')->with('merk',$merk)->with('ukuran',$ukuran)->with('warna',$warna)->with('kategori',$kategori);    }

    public function barangStore(Request $r){
		$this->validate($r,[
      		'b_nama' => 'required|string|max:150',
            'me_id' => 'required',
			'w_id' => 'required',
			'u_id' => 'required',
			'kb_id' => 'required',
            'b_harga' => 'required|integer',
			'b_stok' => 'required|integer',
			'b_image'=>'image|mimes:jpeg,jpg,png|nullable',
      	]);

        //var_dump(Input::all());
            $temp = DB::table('barang')->orderBy('b_id', 'desc')->first()->b_id;
            $temp++;
//            echo $temp;

            $b = new Barang;
            $b->b_id = $temp;
            $b->b_nama = Input::get('b_nama');
            if (Input::get('me_id')!=null)$b->me_id = Input::get('me_id');
            if (Input::get('w_id')!=null)$b->w_id = Input::get('w_id');
            if (Input::get('u_id')!=null)$b->u_id=Input::get('u_id');
            if (Input::get('kb_id')!=null)$b->kb_id = Input::get('kb_id');
            $b->b_harga = Input::get('b_harga');
            $b->b_stok = Input::get('b_stok');

			//Barang::create(Input::all());

            $b->save();
            return redirect('/barang');
    }

	public function barangDestroy(){
		$b =Barang::find(Input::get('barang_id'));
		//echo $b;
        $b->delete();
        return redirect('barang');
	}

	public function barangEdit(){
        $merk=Merk::all();
        $ukuran=Ukuran::all();
        $warna=Warna::all();
        $kategori = KategoriBarang::all();

        $barang = Barang::find(Input::get('barang_id'));

		return view('barang.edit')->with('barang',$barang)->with('merk',$merk)->with('ukuran',$ukuran)->with('warna',$warna)->with('kategori',$kategori);
	}

	public function barangUpdate($id,Request $r){
		$b = Barang::find($id);

		$b->b_nama = Input::get('b_nama');
		if (Input::get('me_id')!=null)$b->me_id = Input::get('me_id');
		if (Input::get('w_id')!=null)$b->w_id = Input::get('w_id');
		if (Input::get('u_id')!=null)$b->u_id=Input::get('u_id');
		if (Input::get('kb_id')!=null)$b->kb_id = Input::get('kb_id');
		$b->b_harga = Input::get('b_harga');
		$b->b_stok = Input::get('b_stok');

		$b->save();

		return redirect('barang');
	}

  public function logBarang(){
    return view('barang.logBarang'); //nanti di with tabel trigger
  }
}
