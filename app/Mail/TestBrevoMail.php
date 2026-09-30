<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestBrevoMail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->subject('Prueba Brevo SMTP')
            ->view('emails.test-brevo')
            ->with([
                'mensaje' => 'Hola 👋, esto es una prueba con Brevo SMTP en Laravel.'
            ]);
    }
}