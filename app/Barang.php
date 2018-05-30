<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $table = 'barang';
    public function Merk(){
    	return $this->belongsTo('App\Merk','merk_id','id');
    }
    public function Warna(){
    	return $this->belongsTo('App\Warna','warna_id','id');
    }
    public function Ukuran(){
    	return $this->belongsTo('App\Ukuran','ukuran_id','id');
    }
    public function KategoriBarang(){
    	return $this->belongsTo('App\KategoriBarang','kategori_barang_id','id');
    }
}
