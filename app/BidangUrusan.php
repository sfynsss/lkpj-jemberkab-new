<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidangUrusan extends Model
{
    protected $table = "bidang_urusan";

    public $timestamps = false;

    public function Program()
    {
    	return $this->hasMany('App\Program', 'bidang_urusan_id', 'id');
    }
}
