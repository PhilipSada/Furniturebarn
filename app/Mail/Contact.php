<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;
    public $content;
    public $attachment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content, $attachment)
    {

        $this->content = $content;
        $this->attachment = $attachment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        $email = $this->subject('Enquiry from Furniturebarn website')
        ->view('mail.contact-mail');

        if($this->attachment !== null){
           $email->attach($this->attachment->getRealPath(), array(
               'as'=>'file.' . $this->attachment->getClientOriginalExtension(),
               'mime'=>$this->attachment->getMimeType()
           ));
        }

        return $email;
    }

      
}
