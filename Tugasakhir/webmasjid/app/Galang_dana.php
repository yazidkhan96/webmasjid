<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galang_dana extends Model
{
    public function kategori()
    {
        return $this->belongsTo(Kategori_donasi::class,'kategori_id');
    }
}
