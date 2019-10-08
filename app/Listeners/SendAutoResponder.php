<?php

namespace App\Listeners;

use App\Mail\EmailMessage;
use App\Events\MessageWasRecived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendAutoResponder
{
    /**
     * Handle the event.
     *
     * @param  MessageWasRecived  $event
     * @return void
     */
    public function handle(MessageWasRecived $event)
    {
        Mail::to($event->msg->email)->queue(new EmailMessage($event->msg));
    }
}
