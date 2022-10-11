<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urusan extends Model
{
    protected $table = "urusan";

    public $timestamps = false;

    public function BidangUrusan()
    {
    	return $this->hasMany('App\BidangUrusan', 'id_urusan', 'id');
    }
}
