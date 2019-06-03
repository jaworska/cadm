<?php

namespace App\Mail;

use App\CV;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewCV extends Mailable
{
    use Queueable, SerializesModels;

    public $cv;
    /**
     * Create a new message instance.
     * @param CV $cv
     * @return void
     */
    public function __construct(CV $cv)
    {
        $this -> cv = $cv;
        $this -> subject('Zgłoszenie w aplikacji - '. $cv -> offer -> title .' ('. trans('pages.career.location.'.$cv -> offer-> location).')');
        $this -> from('system@cadm.pl');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $cv =$this -> cv;
        return $this->markdown('mail.new_cv',compact('cv'))
            ->attachFromStorageDisk('public', $cv -> file);
    }
}
