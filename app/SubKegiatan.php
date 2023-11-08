<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubKegiatan extends Model
{
    protected $table = "sub_kegiatan_induk";
    protected $guarded = [];

    public function Kegiatan()
    {
        return $this->belongsTo('App\Kegiatan', 'kegiatan_id', 'id');
    }

    public function Skpd()
    {
    	return $this->belongsTo('App\Skpd', 'skpd_id', 'id');
    }

}
