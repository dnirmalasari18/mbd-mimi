<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    //
    public function barang(){
    	return $this->hasMany('App\Barang');
    }
}
