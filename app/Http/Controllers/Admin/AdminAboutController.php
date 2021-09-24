<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function index()
    {
        $about = About::first();

        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'preamble' => ['required'],
            'body' => ['required'],
        ]);

        About::create($attributes);

        session()->flash('success', 'Added successfully.');

        return redirect()->route('adminAboutIndex');
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $attributes = $request->validate([
            'preamble' => ['required'],
            'body' => ['required'],
        ]);

        $about->update($attributes);

        session()->flash('success', 'Updated successfully.');

        return redirect()->route('adminAboutIndex');
    }
}
