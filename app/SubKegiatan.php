<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubKegiatan extends Model
{
    protected $table = "sub_kegiatan";

    public function DetSubKegiatan()
    {
    	return $this->hasMany('App\DetSubKegiatan', 'id_sub_keg', 'id');
    }

    public function Kegiatan()
    {
        return $this->belongsTo('App\Kegiatan', 'id_kegiatan', 'id');
    }

    public function Skpd()
    {
    	return $this->belongsTo('App\Skpd', 'id_skpd', 'id');
    }

}
