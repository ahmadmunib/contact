<?php

namespace Acaothman\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        // you send email here but for now we will make a simple demo code
        $data = $request->all();
        return view('contact::contact', compact('data'));
    }
}
