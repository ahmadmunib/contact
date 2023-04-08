<?php

use Acaothman\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

    
    Route::get('contact', [ContactController::class, 'index']);
    
    Route::post('contact', [ContactController::class, 'send'])->name('contact');
    