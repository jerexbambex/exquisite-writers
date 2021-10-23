<?php

namespace App\Http\Controllers\Front;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function show()
    {
        return view('front.pages.contact');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($attributes);

        session()->flash('success', 'We have recieved your message. We will contact you shortly');

        return back();
    }
}
