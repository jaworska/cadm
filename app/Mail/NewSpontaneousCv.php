<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class NewSpontaneousCv extends Mailable
{
    use Queueable, SerializesModels;
    public $cv;
    /**
     * Create a new message instance.
     * @param Request $request
     * @return void
     */
    public function __construct(Request $request,$path)
    {
        $this -> cv = $request;
        $this -> cv -> file = $path;
        $this -> subject('Zgłoszenie w aplikacji - Spontaniczne CV');
        $this -> from('system@cadm.pl','System');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $cv =$this -> cv;
        return $this->markdown('mail.new_spontaneous_cv',compact('cv'))
            ->attachFromStorageDisk('public', $cv -> file);

    }
}
