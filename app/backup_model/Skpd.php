<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skpd extends Model
{
    protected $table = "skpd";

    public $timestamps = false;

    public function File()
    {
        return $this->hasMany('App\FileUpload', 'skpd_id', 'id');
    }
}
