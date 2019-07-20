<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galang_dana extends Model
{
    public function kategori()
    {
        return $this->belongsTo(Kategori_donasi::class,'kategori_id');
    }
    public function donasi()
    {
        return $this->hasMany(Donasi_pengunjung::class,'galangdana_id');
    }
    public function user()
    {
        return $this->hasMany(Galang_dana::class,'creator_id');
    }

    public function penyerahan()
    {
        return $this->hasMany(Galang_dana::class,'galang_dana_id');
    }

}
