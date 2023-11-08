<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndikatorUtama extends Model
{
    protected $table = "indikator_utama";

    protected $guarded = [];

    public $timestamps = false;

    public function Skpd()
    {
    	return $this->belongsTo('App\Skpd', 'skpd_id', 'id');
    }

    public function BidangUrusan()
    {
    	return $this->belongsTo('App\BidangUrusan', 'bidang_urusan_id', 'id');
    }
}
