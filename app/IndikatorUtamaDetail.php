<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndikatorUtamaDetail extends Model
{
    protected $table = "indikator_utama_detail";

    protected $guarded = [];

    public $timestamps = false;

    public function IndikatorUtama()
    {
    	return $this->belongsTo('App\IndikatorUtama', 'indikator_utama_id', 'id');
    }

    public function Bidang()
    {
    	return $this->belongsTo('App\BidangUrusan', 'bidang_urusan_id', 'id');
    }

    public function Urusan()
    {
    	return $this->belongsTo('App\Urusan', 'urusan_id', 'id');
    }
}
