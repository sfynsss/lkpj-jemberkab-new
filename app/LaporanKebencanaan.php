<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanKebencanaan extends Model
{
    protected $table = "lap_kebencanaan";
    protected $guarded = ['id'];
    public $timestamps = false;
}
