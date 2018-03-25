<?php

namespace App\Listeners;

use App\Events\DataCreated;
use App\Mail\userRegistered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendUserEmail
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
     * @param  DataCreated  $event
     * @return void
     */
    public function handle(DataCreated $event)
    {
        Mail::to($event->user->email)->send(new userRegistered($event->user));
    }
}
