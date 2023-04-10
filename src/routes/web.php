<?php

use Acaothman\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Composer\Config;

$config = new Config();
$url = $config->get('extra.contact-url.default', '/contact');
    
    Route::get($url, [ContactController::class, 'index']);
    
    Route::post($url, [ContactController::class, 'send'])->name('contact');
    