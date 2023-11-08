<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = "kecamatan";

    public function JumlahPenduduk()
    {
    	return $this->hasMany('App\JumlahPenduduk', 'kecamatan_id', 'id');
    }
}
