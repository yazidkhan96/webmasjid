<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penzakat extends Model
{
    public function zakat()
    {
        return $this->belongsTo(Zakat::class,'zakat_id');
    }

    public function tanggal()
    {
        return $this->belongsTo(Penyerahan::class,'penyerahan_id');
    }
}
