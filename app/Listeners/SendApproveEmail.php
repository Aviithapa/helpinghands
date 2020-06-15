<?php

namespace App\Listeners;

use Mail;
use App\Events\UserApprove;
use Log;

class SendApproveEmail
{

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserApprove $event)
    {
        Log::info($event->user);
        $data = array('name' => $event->user->name, 'email' => $event->user->email,'user'=>$event->user, 'body' => 'hello  '.$event->user->name.'! Your application for registraion has been approved.');

        Mail::send('emails.mail', $data, function($message) use ($data) {
            $message->to($data['email'])
                ->subject('Welcome to our Website');
            $message->from('noreply@bajraprabin.net');
        });
    }
}