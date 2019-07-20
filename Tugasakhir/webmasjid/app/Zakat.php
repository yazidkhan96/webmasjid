<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zakat extends Model
{
    public function penzakat()
    {
        return $this->hasMany(Penzakat::class,'zakat_id');
    }
}
