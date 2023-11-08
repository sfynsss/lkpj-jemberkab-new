<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SasaranBaru extends Model
{
    protected $table = "sasaran_baru";

    public function Program()
    {
    	return $this->hasMany('App\Program', 'sasaran_id', 'id');
    }

}
