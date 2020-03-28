<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

        Mail::raw('It works!', function() {
            $message->to(request('email'))
                ->subject('Hello There');
        });

        return redirect('/contact')
            ->with('message', 'Email sent'); //flash message
    }
}
