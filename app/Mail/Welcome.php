<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $username;

    public $hash;

    public function __construct($username, $hash)
    {
        $this->username = $username;
        $this->hash = $hash;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('westlifefithanu@gmail.com')
                    ->subject('[Westlife] Welcome')
                    ->markdown('emails.welcome');
    }
}
