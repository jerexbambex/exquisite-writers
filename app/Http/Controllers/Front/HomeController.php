<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\Policy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('user')->latest()->limit(3)->get();
        $testimonials = Testimonial::orderBy('created_at', 'desc')->get();

        return view('welcome', compact('blogs', 'testimonials'));
    }
    public function privacy()
    {
        $privacy = Policy::first();

        return view('front.pages.privacy', compact('privacy'));
    }
}
