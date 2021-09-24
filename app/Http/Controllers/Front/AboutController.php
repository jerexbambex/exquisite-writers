<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $about = About::first();

        return view('front.pages.about', compact('about'));
    }
}
