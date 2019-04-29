<?php

namespace App\Listeners;

use App\Events\Mail;
use App\Mail\ContactMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail as Mail2;

class MailListener
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
     * @param  Mail2  $event
     * @return void
     */
    public function handle(Mail $request) {
        Mail2::to($request->manu)->send(new ContactMail($request->manu));
    }
}
