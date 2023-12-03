<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TugasPembantuan extends Model
{
    protected $table = "tugas_pembantuan";
    protected $guarded = [];
    public $timestamps = true;

    public function SKPD()
    {
        return $this->belongsTo(Skpd::class, 'skpd_id', 'id');
    }

    public function Subkegiatan()
    {
        return $this->belongsTo(SubkegiatanInduk::class, 'subkegiatan_id', 'id');
    }
}
