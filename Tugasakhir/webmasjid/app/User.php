<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

     public function perencanaan()
    {
        return $this->hasMany(Perencanaan_kajian_pelatihan::class,'user_id');
    }

    public function galangdana()
    {
        return $this->hasOne(Galang_dana::class,'creator_id');
    }

     public function penarikan()
    {
        return $this->hasMany(Penarikan::class);
    }





    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
