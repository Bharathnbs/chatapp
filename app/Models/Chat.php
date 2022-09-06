<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public function Message()
    {
        return $this->hasMany(Message::class);
    }

    public function chat_user()
    {
        return $this->belongsToMany(Chat_user::class, 'Chat_user');
    }
    
}
