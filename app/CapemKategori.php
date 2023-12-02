<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapemKategori extends Model
{
    protected $table = "capem_kategori";
    protected $guarded = [];
    public $timestamps = true;

    public function Data()
    {
        return $this->hasMany(CapemData::class, 'kategori_id', 'id');
    }
}
