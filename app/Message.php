<?php

namespace App;

use App\Mail\MessageCreated;
use App\Mail\ReplyCreated;
use Illuminate\Database\Eloquent\Model;


class Message extends Model
{
    protected $guarded = [];

    protected $dispatchesEvents = [
        'created' => MessageCreated::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function addReply($reply, $message)
    {
        $this->replies()->create($reply);

        $user = User::find($message->user_id, ['id', 'email']);
//        echo '<pre>';
//        print_r($user->email);
//        echo '</pre>';
        //$messageOwnerEmail = $message->owner()->email;
        //var_dump($message->owner());
        \Mail::to($user->email)->queue(
            new ReplyCreated($reply)
        );
    }

    //functionality for sending email has now been further moved into the SendMessageCreatedNotification listener
    protected static function boot()
    {
        parent::boot();

        $user = User::find(1, ['id', 'email']);
        //uses model event hook: //https://laravel.com/docs/5.6/eloquent#events
        static::created(function($message){
            $user = User::find(1, ['id', 'email']);   //send email to admin
            \Mail::to($user->email)->queue(
                new MessageCreated($message)
            );

        });
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
