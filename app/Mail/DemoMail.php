<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name = '';
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //        
        $this->name = 'Sandip';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('maildemo');
        return $this->view('maildemo')->with(['name' => $this->name]);
    }
}
