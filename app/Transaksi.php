<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    public function Member(){
    	return $this->belongsTo('App\Member','member_id','id');
    }
    public function Barang(){
    	return $this->belongsTo('App\Barang','barang_id','id');
    }
}
