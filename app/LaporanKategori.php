<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanKategori extends Model
{
    protected $table = "lap_kategori";
    protected $guarded = ['id'];
    public $timestamps = false;

}
