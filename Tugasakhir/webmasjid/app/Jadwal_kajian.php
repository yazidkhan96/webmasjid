<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_kajian extends Model
{
   public function masjid()
    {
        return $this->belongsTo(Masjid::class,'masjid_id');
    }

}
