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
    	return $this->belongsTo('App\IndikatorUtama', 'id_indikator_utama', 'id');
    }

    public function Bidang()
    {
    	return $this->belongsTo('App\BidangUrusan', 'id_bidang_urusan', 'id');
    }

    public function Urusan()
    {
    	return $this->belongsTo('App\Urusan', 'id_urusan', 'id');
    }
}
