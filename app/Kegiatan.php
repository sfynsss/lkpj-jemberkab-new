<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = "kegiatan";

    public function Program()
    {
    	return $this->belongsTo('App\Program', 'id_program', 'id');
    }

    public function SubKegiatan()
    {
    	return $this->hasMany('App\SubKegiatan', 'id_kegiatan', 'id');
    }

    public function Skpd()
    {
    	return $this->belongsTo('App\Skpd', 'id_skpd', 'id');
    }
}
