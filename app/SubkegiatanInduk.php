<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubkegiatanInduk extends Model
{
    protected $table = 'sub_kegiatan_induk';
    protected $guarded = [];

    public function Kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id', 'id');
    }

    public function Tahun()
    {
        return $this->hasMany(SubkegiatanTahun::class, 'subkegiatan_id', 'id');
    }

    public function Bulan()
    {
        return $this->hasMany(SubkegiatanBulan::class, 'subkegiatan_id', 'id');
    }
}
