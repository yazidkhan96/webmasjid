<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perencanaan_kajian_pelatihan extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
