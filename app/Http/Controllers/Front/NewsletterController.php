<?php

namespace App\Http\Controllers\Front;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class NewsletterController extends Controller
{
    public function store(Request  $request)
    {
        $email = $request->validate([
            'email' => ['required', 'email', 'unique:newsletters,email']
        ]);

        Newsletter::create($email);

        session()->flash('success', 'We have added you to our list, expect a message soon');
        Alert::success('Success', 'We have added you to our list, expect a message soon');

        return back();
    }
}
