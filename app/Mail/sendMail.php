<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $s; 
    public $data;

    public function __construct($data, $subject)
    {
        $this->data= $data;
        $this->s= $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       $e_subject='requested '.$this->s;
        $data[]=$this->data;
        return $this->view('backend.user.notifyMail', compact('data'))->subject($e_subject);
    }
}
