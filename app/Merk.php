<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $primaryKey = 'me_id';
    public $incrementing = false;

    protected $table = 'merk';
    public function barang(){
    	return $this->hasMany('App\Barang');
    }
}
