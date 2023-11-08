<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndikatorDetail extends Model
{
    protected $table = "indikator_detail";

    protected $guarded = [];

    public $timestamps = false;

    public function Indikator()
    {
    	return $this->belongsTo('App\Indikator', 'indikator_id', 'id');
    }

    public function Urusan()
    {
    	return $this->belongsTo('App\Urusan', 'urusan_id', 'id');
    }
}
