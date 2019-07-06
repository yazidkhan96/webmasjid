<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_donasi extends Model
{
     public function galangdana()
    {
        return $this->hasMany(Galang_dana::class,'kategori_id');
    }
}
