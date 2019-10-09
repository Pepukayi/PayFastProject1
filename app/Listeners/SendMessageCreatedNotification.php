<?php

namespace App\Listeners;

use App\Events\MessageCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\MessageCreated as MessageCreatedMail;

class SendMessageCreatedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MessageCreated  $event
     * @return void
     */
    public function handle(MessageCreated $event)
    {
        Mail::to($event->message->owner->email)->send(
            new MessageCreatedMail($event->message)
        );
    }
}
