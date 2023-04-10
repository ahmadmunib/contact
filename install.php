<?php

$url = readline("What URL do you want to use to view the contact page? (default: /contact) ");

if (empty($url)) {
    $url = '/contact';
}

// Save the URL in a config file or database, or use it directly in your package
// For example:
// Config::set('contact.url', $url);
// Or
// $contactPage = new ContactPage($url);

