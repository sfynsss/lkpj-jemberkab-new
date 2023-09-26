<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubkegiatanTahun extends Model
{
    protected $table = 'sub_kegiatan_tahun';
    protected $guarded = [];

    public function Subkegiatan()
    {
        return $this->belongsTo(SubkegiatanInduk::class, 'subkegiatan_id', 'id');
    }
}
