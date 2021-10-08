<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('categories')->latest()->paginate();

        return view('front.blog.index', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        $next = Blog::where('id', '>', $blog->id)->orderBy('id')->first();
        $previous = Blog::where('id', '<', $blog->id)->orderBy('id','desc')->first();

        return view('front.blog.show', compact('blog', 'next', 'previous'));
    }
}
