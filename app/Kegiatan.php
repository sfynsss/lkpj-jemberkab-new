<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = "kegiatan";

    public function Program()
    {
    	return $this->belongsTo('App\Program', 'program_id', 'id');
    }

    public function SubKegiatan()
    {
    	return $this->hasMany('App\SubKegiatan', 'kegiatan_id', 'id');
    }

    public function Skpd()
    {
    	return $this->belongsTo('App\Skpd', 'skpd_id', 'id');
    }
}
