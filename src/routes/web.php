<?php

use Acaothman\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Composer\Config;

// Include the Composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';

$config = new Config();
$url = \Composer\Config::getInstance()->get('extra.contact-url.default', '/contact');

    
    Route::get($url, [ContactController::class, 'index']);
    
    Route::post($url, [ContactController::class, 'send'])->name('contact');
    