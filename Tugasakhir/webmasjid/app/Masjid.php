<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masjid extends Model
{
    public function pelatihan()
    {
        return $this->hasMany(Pelatihan::class,'masjid_id');
    }
}
