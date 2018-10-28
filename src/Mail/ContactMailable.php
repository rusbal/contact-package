<?php

namespace Rsusbal\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class ContactMailable
 * @package Rsusbal\Contact\Mail
 */
class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var
     */
    public $message;

    /**
     * @var
     */
    public $name;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $message
     */
    public function __construct($name, $message)
    {
        $this->name = $name;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with([
            'name' => $this->name,
            'message' => $this->message
        ]);
    }
}
