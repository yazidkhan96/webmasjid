<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penarikan extends Model
{

	public function user()
	{

		return $this->belongsTo(User::class);
	}	
	


}
