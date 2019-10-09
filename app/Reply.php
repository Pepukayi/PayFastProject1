<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $guarded = [];
    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
