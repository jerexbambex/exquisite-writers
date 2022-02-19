<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Traits\ImageUpload;
use App\Http\Controllers\Controller;

class AdminTeamController extends Controller
{
    use ImageUpload;

    public function index()
    {
        $teams = Team::all();

        return view('admin.teams.index', compact('teams'));
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'handle' => ['required', 'max:255'],
            'role' => ['required', 'max:255'],
        ]);

        if ($request->hasFile('avatar')) {
            request()->validate([
                'avatar' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:4048'],
            ]);
            $results = $this->imageUpload($request->file('avatar'), 455, 475);

            $attributes['avatar'] = json_encode($results);
        }

        Team::create($attributes);

        session()->flash('success', 'You have successfully added '. $attributes['first_name'] .' as a team member.');
        return back();
    }

    public function update(Team $team)
    {
        $attributes = request()->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'handle' => ['required', 'max:255'],
            'role' => ['required', 'max:255'],
        ]);

        if (request()->hasFile('avatar')) {
            request()->validate([
                'avatar' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:4048'],
            ]);
            if ($team->avatar) {
                $publicId = json_decode($team->avatar)->public_id;
                Cloudinary::destroy($publicId, $options = []);
            }

            $results = $this->imageUpload(request()->file('avatar'));

            $attributes['avatar'] = json_encode($results);
        }

        $team->update($attributes);

        request()->session()->flash('success', 'You have successfully updated ' . $team->first_name . "'s record");
        return back();
    }

    public function destroy(Team $team)
    {
        $publicId = json_decode($team->avatar)->public_id;
        Cloudinary::destroy($publicId, $options = []);

        $team->delete();

        request()->session()->flash('success', 'You have successfully Deleted the record');
        return back();
    }
}
