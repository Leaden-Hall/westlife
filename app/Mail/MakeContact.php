<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MakeContact extends Mailable
{
    use Queueable, SerializesModels;


    public $contactName;

    public $contactMessage;

    public function __construct($contactName, $contactMessage)
    {
        $this->contactName = $contactName;

        $this->contactMessage = $contactMessage;
    }


    public function build()
    {
        return $this->from('westlifefithanu@gmail.com')
                    ->subject('[Westlife] We will get in touch')
                    ->markdown('emails.contact');
    }
}
