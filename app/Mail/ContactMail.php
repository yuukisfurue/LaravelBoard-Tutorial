<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $view;
    public $subject;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($template, $subject, $data)
    {
        $this->template = $template;
        $this->subject  = $subject;
        $this->data     = $data;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text($this->template)->subject($this->subject);
    }
}
