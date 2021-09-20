<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function privacy()
    {
        $privacy = Policy::first();
        
        return view('front.pages.privacy', compact('privacy'));
    }
}
