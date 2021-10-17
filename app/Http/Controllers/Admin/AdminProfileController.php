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

        if ($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:4048'],
            ]);

            if ($user->avatar) {
                $publicId = json_decode($user->avatar)->public_id;

                $this->imageDelete($publicId);
            }

            $results = $this->imageUpload(request()->file('avatar'));

            $attributes['avatar'] = json_encode($results);
        }

        $user->update($attributes);

        session()->flash('success', 'Updated Successfully');
        return redirect()->route('adminProfileEdit', $user);
    }
}
