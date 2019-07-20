<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyerahan extends Model
{

	public function penzakat()
    {
        return $this->hasMany(Penzakat::class,'penyerahan_id');
    }

 }
