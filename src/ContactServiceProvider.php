<?php

namespace Acaothman\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->mergeConfigFrom(__DIR__ . '/config/acacontact.php', 'contact');
    }
    public function register()
    {
        // $this->app->bind('contact', function () {
        //     return new ContactService();
        // });
    }
}