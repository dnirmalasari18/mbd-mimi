<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    //
    public function barang(){
    	return $this->hasMany('App\Barang');
    }
}
