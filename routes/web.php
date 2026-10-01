<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\RegisterController;
use App\Mail\TestBrevoMail; 
use App\Http\Controllers\MailController;

Route::get('/test-mail', function () {
    Mail::to('rmlaura97@gmail.com')->send(
        new TestBrevoMail(
            'Laura',
            'Prueba Brevo SMTP',
            'Hola 👋, esto es una prueba con Brevo SMTP en Laravel.'
        )
    );

    return 'OK: Mail enviado';
});

Route::get('/mail', [MailController::class, 'formulario'])
    ->name('mail.formulario');

Route::post('/mail/enviar', [MailController::class, 'enviar'])
    ->name('mail.enviar');

Route::get('/register', [RegisterController::class, 'create'])
    ->name('register');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');
    