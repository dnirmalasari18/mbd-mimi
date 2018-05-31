<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    //
    protected $primaryKey = 'w_id';
    public $incrementing = false;

    protected $table = 'warna';
    public function barang(){
    	return $this->hasMany('App\Barang');
    }
}
