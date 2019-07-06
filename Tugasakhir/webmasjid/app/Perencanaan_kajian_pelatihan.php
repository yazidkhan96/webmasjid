<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perencanaan_kajian_pelatihan extends Model
{
    public function pengurus()
    {
        return $this->belongsTo(Pengurus::class,'pengurus_id');
    }
}
