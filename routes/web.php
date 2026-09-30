<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\RegisterController;
use App\Mail\TestBrevoMail; 


Route::get('/test-mail', function () { 
    Mail::to('rmlaura97@gmail.com')->send(new TestBrevoMail()); 
    return 'OK: Mail enviado'; 
}); 

Route::get('/register', [RegisterController::class, 'create'])
    ->name('register');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');
