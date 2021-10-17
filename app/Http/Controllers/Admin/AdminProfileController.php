<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\ImageUpload;
use App\Http\Controllers\Controller;

class AdminProfileController extends Controller
{
    use ImageUpload;

    public function index(User $user)
    {
        return view('admin.User.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.User.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $attributes = $request->validate([
            'name' => ['required'],
            'title' => ['required'],
            'bio' => ['required', 'max:500']
        ]);

        if($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => ['image', 'mimes:png,jpg,jpeg', 'max:2048']
            ]);

            $results = $this->imageUpload($request->file('avatar'));

            $attributes['avatar'] = json_encode($results);
        }
    }
}
