<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IKDBulan extends Model
{
    protected $table = 'ikd_bulan';
    protected $guarded = [];

    public function IKD()
    {
        return $this->belongsTo(IKD::class, 'ikd_id', 'id');
    }
}
