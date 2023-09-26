<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenutupOPD extends Model
{
    protected $table = "ket_penutup";

    protected $guarded = [];

    public $timestamps = false;

    public function Skpd()
    {
    	return $this->belongsTo('App\Skpd', 'skpd_id', 'id');
    }
}
