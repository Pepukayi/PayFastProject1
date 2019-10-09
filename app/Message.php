<?php

namespace App;

use App\Mail\MessageCreated;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function addReply($reply)
    {
        $this->replies()->create($reply);
    }

    //functionality for sending email has now been further moved into the SendProjectCreatedNotification listener
    protected static function boot()
    {
        parent::boot();

        //uses model event hook: //https://laravel.com/docs/5.6/eloquent#events
//        static::created(function($message){
//            \Mail::to('pesto.chitondo@gmail.com')->queue(
//                new MessageCreated($message)
//            );
//        });
    }
}
