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

        //sending Message owner email
        $user = User::find($message->user_id, ['id', 'email']);
        \Mail::to($user->email)->queue(
            new ReplyCreated($reply)
        );
    }

    protected static function boot()
    {
        parent::boot();

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
