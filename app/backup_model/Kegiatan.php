<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = "kegiatan";

    public function SubKegiatan()
    {
    	return $this->hasMany('App\SubKegiatan', 'kegiatan_id', 'id');
    }
}
