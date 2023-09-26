<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = "program";

    public function Kegiatan()
    {
    	return $this->hasMany('App\Kegiatan', 'program_id', 'id');
    }

    public function Skpd()
    {
    	return $this->belongsTo('App\Skpd', 'skpd_id', 'id');
    }

    public function BidangUrusan()
    {
    	return $this->belongsTo('App\BidangUrusan', 'id_bidang_urusan', 'id');
    }
}
