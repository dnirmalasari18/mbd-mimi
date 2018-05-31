<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    protected $primaryKey = 'u_id';
    public $incrementing = false;

    protected $table = 'ukuran';
    public function barang(){
    	return $this->hasMany('App\Barang');
    }
}
