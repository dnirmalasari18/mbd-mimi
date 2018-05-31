<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $primaryKey = 'b_id';
    public $incrementing = false;

    protected $table = 'barang';
    public $timestamps = 'false';

    public function Merk(){
    	return $this->belongsTo('App\Merk','me_id','me_id');
    }
    public function Warna(){
    	return $this->belongsTo('App\Warna','w_id','w_id');
    }
    public function Ukuran(){
    	return $this->belongsTo('App\Ukuran','u_id','u_id');
    }
    public function KategoriBarang(){
    	return $this->belongsTo('App\KategoriBarang','kb_id','kb_id');
    }

    public function Transaksi(){
        return $this->hasMany('App\Transaksi','b_id','b_id');
    }
}
