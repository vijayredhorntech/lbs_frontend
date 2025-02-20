<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $number;
    public $messageText;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $number, $message)
    {

        $this->name = $name;
        $this->email = $email;
        $this->number = $number;
        $this->messageText = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact Form Submission')
            ->view('emails.contact-form');
    }
}
