<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skpd extends Model
{
    protected $table = "skpd";

    public $timestamps = false;

    public function File()
    {
        return $this->hasMany('App\FileUpload', 'id_skpd', 'id');
    }

    public function Program()
    {
        return $this->hasMany('App\Program', 'id_skpd', 'id');
    }

    public function User()
    {
        return $this->belongsTo('App\User', 'id', 'id_skpd');
    }
}
