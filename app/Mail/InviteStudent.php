<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InviteStudent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $studentemail;
    public $accesscode;

    public function __construct($studentemail, $accesscode)
    {
        $this->studentemail = $studentemail;
        $this->accesscode = $accesscode;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            // will render the invite as a HTML form
                ->view('inviteemail')
                ->with([ 'studentemail' => $this->studentemail, 'accesscode' => $this->accesscode]);
    }
}
