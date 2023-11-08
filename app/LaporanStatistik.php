<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanStatistik extends Model
{
    protected $table = "lap_statistik";
    protected $guarded = ['id'];

    public function Kategori()
    {
        return $this->belongsTo('App\LaporanKategori', 'kategori_id', 'id');
    }
}
