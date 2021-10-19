<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\Policy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('user')->latest()->limit(3)->get();

        return view('welcome', compact('blogs'));
    }
    public function privacy()
    {
        $privacy = Policy::first();

        return view('front.pages.privacy', compact('privacy'));
    }
}
