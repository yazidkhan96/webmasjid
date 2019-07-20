<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donasi_pengunjung extends Model
{

public function galangdana()
    {
        return $this->belongsTo(Galang_dana::class,'galangdana_id');
    }

}
