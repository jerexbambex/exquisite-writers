<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }

    public function store(Request $request)
    {
    	$attributes = $request->validate([
    		'name' => ['required', 'unique:categories,name']
    	]);

    	$category = Category::create($attributes);

    	session()->flash('success', 'Added Successfully');

    	return back();
    }

    public function update(Request $request, Category $category)
    {
        $attributes = $request->validate([
    		'name' => ['required'],
        ]);

        $category->update($attributes);

        session()->flash('success', 'Updated Successfully');

        return back();
    }
}
