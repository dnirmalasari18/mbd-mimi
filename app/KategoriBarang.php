<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    //
	protected $primaryKey = 'kb_id';
	public $incrementing = false;

    protected $table = 'kategori_barang';
    public function barang(){
    	return $this->hasMany('App\Barang');
    }
}
