<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];
    //related to conversation
    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
    //related to user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
