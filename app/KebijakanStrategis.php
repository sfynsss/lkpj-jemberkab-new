<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KebijakanStrategis extends Model
{
    protected $table = "lap_kebijakan_strategis";
    protected $guarded = [];
    public $timestamps = true;

    public function Subkegiatan()
    {
        return $this->belongsTo(SubkegiatanInduk::class, 'subkegiatan_id', 'id');
    }
}
