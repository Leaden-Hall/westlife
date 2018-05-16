<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MakeContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $contactName;

    public $contactMessage;

    public function __construct($contactName, $contactMessage)
    {
        $this->contactName = $contactName;

        $this->contactMessage = $contactMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('westlifefithanu@gmail.com')
                    ->subject('[Westlife] We will get in touch')
                    ->markdown('emails.contact');
    }
}
