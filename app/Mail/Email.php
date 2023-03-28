<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $email;
    public $subject;
    public $messages;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $informations)
    {
        $this->name = $informations['name'];
        $this->email = $informations['email'];
        $this->subject = $informations['subject'];
        $this->messages = explode('\n', $informations['message']);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@supplybusinesservice.com')
            ->subject($this->subject)
            ->view('pages.includes.email');
    }
}
