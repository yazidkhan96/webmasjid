<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatForum extends Model
{
    public function replied()
    {
        return $this->hasMany(ChatForum::class,'chat_forum_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
