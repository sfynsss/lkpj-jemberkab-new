<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IKD extends Model
{
    protected $table = 'ikd';
    protected $guarded = [];

    public function SKPD()
    {
        return $this->belongsTo(SKPD::class, 'skpd_id', 'id');
    }
}
