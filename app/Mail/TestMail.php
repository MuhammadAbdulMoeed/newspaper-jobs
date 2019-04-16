<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $data;
    protected $id;
    public function __construct($data)
    {
        $this->data = $data['title'];
        $this->id = $data['id'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $test = $this->data;
        $id = $this->id;
        return $this->view('emails.test' , compact('test' , 'id'))->subject('Subscriptiion Mail');
    }
}
