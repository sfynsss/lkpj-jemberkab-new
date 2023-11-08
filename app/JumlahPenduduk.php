<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JumlahPenduduk extends Model
{
    protected $table = "lap_jumlah_penduduk";
    protected $guarded = ['id', 'kecamatan_id'];
    public $timestamps = false;

    public function Kecamatan()
    {
    	return $this->belongsTo('App\Kecamatan', 'kecamatan_id', 'id');
    }
}
