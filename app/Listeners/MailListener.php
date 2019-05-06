<?php

namespace App\Listeners;

use App\Events\Mail;
use App\Mail\Contact;
use App\Mail\AccuséDeRéception;
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
        // Mail2::to($request->manu)->send(new ContactMail($request->manu));

        $to_name = 'Emanuel';
        $to_email = 'emanuel.portela.rib@gmail.com';
    
        Mail2::to($to_email, $to_name)->send(new Contact($request->manu));

        Mail2::send(new AccuséDeRéception($request->manu));
        
    }
}
