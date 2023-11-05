<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatistikInduk extends Model
{
    protected $table = "statistik_induk";
    protected $guarded = ['id'];

    public function Kategori()
    {
        return $this->belongsTo('App\StatistikKategori', 'kategori_id', 'id');
    }
}
