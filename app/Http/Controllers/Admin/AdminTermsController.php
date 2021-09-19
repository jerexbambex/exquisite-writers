<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use Illuminate\Http\Request;

class AdminTermsController extends Controller
{
    public function index()
    {
        $term = Policy::first();

        return view('admin.terms.index', compact('term'));
    }

    public function create()
    {
        return view('admin.terms.create');
    }

    public function edit(Policy $term)
    {
        return view('admin.terms.edit', compact('term'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $attributes = $request->validate([
            'body' => ['required']
        ]);

        Policy::create($attributes);

        session()->flash('success', 'You have successfully added a new post.');

        return redirect()->route('adminTermsIndex');
    }

    public function update(Request $request, Policy $term)
    {
        $attributes = $request->validate([
            'body' => ['required']
        ]);

        $term->update($attributes);

        session()->flash('success', 'You have successfully Updated the Policy statement.');

        return back();
    }
}
