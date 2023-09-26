<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubkegiatanBulan extends Model
{
    protected $table = 'sub_kegiatan_bulan';
    protected $guarded = [];

    public function Subkegiatan()
    {
        return $this->belongsTo(SubkegiatanInduk::class, 'subkegiatan_id', 'id');
    }
}
