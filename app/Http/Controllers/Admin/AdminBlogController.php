<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Traits\ImageUpload;
use App\Http\Controllers\Controller;

class AdminBlogController extends Controller
{
    use ImageUpload;

    public $allCategories;
    public function __construct()
    {
        $this->allCategories = Category::all();
    }

    public function index()
    {
        $blogs = Blog::latest()->with('categories')->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        $allCategories = $this->allCategories;
        return view('admin.blog.create', compact('allCategories'));
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required', 'max:100'],
            'description' => ['required'],
            'body' => ['required']
        ]);

        if($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => ['image', 'mimes:png,jpg,jpeg', 'max:4048']
            ]);

            $results = $this->imageUpload($request->file('avatar'));

            $attributes['avatar'] = json_encode($results);
        }

        $blog = Blog::create($attributes);

        $blog->categories()->attach($request->categories);

        $blog->user_id = $request->user()->id;
        $blog->update();

        session()->flash('success', 'You have successfully added a new post.');
        return back();
    }

    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        $allCategories = $this->allCategories;

        return view('admin.blog.edit', compact('blog','allCategories'));
    }

    public function update(Request $request, Blog $blog)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'body' => ['required']
        ]);

        if ($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:4048'],
            ]);

            if ($blog->avatar) {
                $publicId = json_decode($blog->avatar)->public_id;

                $this->imageDelete($publicId);
            }

            $results = $this->imageUpload(request()->file('avatar'));

            $attributes['avatar'] = json_encode($results);
        }

        $blog->update($attributes);
        $blog->categories()->syncWithoutDetaching($request->categories);

        session()->flash('success', 'Updated Successfully');
        return redirect()->route('adminBlogShow', $blog);
    }

    public function destroy(Blog $blog)
    {
        if ($blog->avatar) {
            $publicId = json_decode($blog->avatar)->public_id;
            Cloudinary::destroy($publicId, $options = []);
        }

        $blog->delete();

        session()->flash('success', 'Deleted successfully');
        return back();
    }
}
