<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapemData extends Model
{
    protected $table = "capem_data";
    protected $guarded = [];
    public $timestamps = true;

    public function Kategori()
    {
        return $this->belongsTo(CapemData::class, 'kategori_id', 'id');
    }
}
