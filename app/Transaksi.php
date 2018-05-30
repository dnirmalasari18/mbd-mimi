<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $table = 'transaksi';

    protected $fillable = [
    	'm_id',
    	'b_id',
    	't_jumlah_barang',
    ];

    public function Member(){
    	return $this->belongsTo('App\Member','m_id','m_id');
    }
    public function Barang(){
    	return $this->belongsTo('App\Barang','b_id','b_id');
    }
}
