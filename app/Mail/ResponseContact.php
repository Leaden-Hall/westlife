<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResponseContact extends Mailable
{
    use Queueable, SerializesModels;

    public $question;
    public $answer;
    public $signature;

    public function __construct($question, $answer, $signature)
    {
        $this->question = $question;
        $this->answer = $answer;
        $this->signature = $signature;
    }

    public function build()
    {
        return $this->from('westlifefithanu@gmail.com')
                    ->subject('[Westlife] Here is our answer')
                    ->markdown('emails.response');
    }
}
