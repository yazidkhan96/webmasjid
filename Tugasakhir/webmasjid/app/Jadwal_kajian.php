<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_kajian extends Model
{
    public function kategori()
    {
        return $this->belongsTo(Galang_dana::class,'pengurus_id');
    }
}
