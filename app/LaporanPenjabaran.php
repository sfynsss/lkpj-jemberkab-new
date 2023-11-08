<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanPenjabaran extends Model
{
    protected $table = "lap_penjabaran";
    protected $guarded = ['id'];

    public function Kategori()
    {
        return $this->belongsTo('App\LaporanKategori', 'kategori_id', 'id');
    }
}
