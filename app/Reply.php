<?php

namespace App;

use App\Mail\ReplyCreated;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];
    public function message()
    {
        return $this->belongsTo(Message::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
