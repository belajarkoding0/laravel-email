<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Belajarkoding0Email extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('pengirim@belajarkoding0.com')
            ->view('emailku')
            ->with(
                [
                    'nama' => 'Haffsriyandra Yusuf',
                    'website' => 'www.belajarkoding0.com',
                ]
            );
    }
}
