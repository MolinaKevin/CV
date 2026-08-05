<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OfferEmail extends Mailable
{
    use Queueable, SerializesModels;
     /**
     * The demo object instance.
     *
     * @var Demo
     */
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
                    ->replyTo($this->email->senderEmail, $this->email->sender)
                    ->view('mails.offer')
                    ->text('mails.offer_plain')
                    ->subject($this->email->subject);
    }
}
