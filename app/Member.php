<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $primaryKey = 'm_id';
    public $incrementing = false;

    protected $table = 'member';
}
