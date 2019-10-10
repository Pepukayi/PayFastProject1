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

//    //functionality for sending email has now been further moved into the SendMessageCreatedNotification listener
//    protected static function boot()
//    {
//        parent::boot();
//
//        //uses model event hook: //https://laravel.com/docs/5.6/eloquent#events
//        static::created(function($reply){
//            //$user = User::find(1, ['id', 'email']);   //send email to admin
//            $owner = $this->belongsTo()->email;
//            \Mail::to($owner)->queue(
//                new ReplyCreated($reply)
//            );
//
//        });
//    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
