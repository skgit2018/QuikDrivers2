<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mobile;

class sendOtpMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $otp;
    public function __construct(Otp $otp)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    /*public function build()
    {
        return $this->view('emails.sendOtpMail');
    }*/
    public function build()
{
return $this->view('emaiils.sendOtpMail')->with([‘email_token’ => $this->user->email_token,]);
}

}
