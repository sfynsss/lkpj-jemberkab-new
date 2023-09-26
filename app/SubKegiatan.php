<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubKegiatan extends Model
{
    protected $table = "sub_kegiatan";
    protected $guarded = [];

    public function DetSubKegiatan()
    {
    	return $this->hasMany('App\DetSubKegiatan', 'id_sub_keg', 'id');
    }

    public function Kegiatan()
    {
        return $this->belongsTo('App\Kegiatan', 'kegiatan_id', 'id');
    }

    public function Skpd()
    {
    	return $this->belongsTo('App\Skpd', 'skpd_id', 'id');
    }

}
