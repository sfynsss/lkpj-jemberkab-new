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

    public function Program()
    {
        return $this->hasMany('App\Program', 'skpd_id', 'id');
    }

    public function User()
    {
        return $this->belongsTo('App\User', 'id', 'skpd_id');
    }
}
