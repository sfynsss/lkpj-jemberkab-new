<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    protected $table = "indikator";

    protected $guarded = [];

    public $timestamps = false;

    public function Skpd()
    {
    	return $this->belongsTo('App\Skpd', 'id_skpd', 'id');
    }

    public function Urusan()
    {
    	return $this->belongsTo('App\Urusan', 'id_urusan', 'id');
    }
}
