<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Traits\ImageUpload;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeamStoreRequest;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AdminTeamController extends Controller
{
    use ImageUpload;

    public function index()
    {
        $teams = Team::all();

        return view('admin.teams.index', compact('teams'));
    }

    public function store(TeamStoreRequest $request)
    {
        $attributes = $request->validated();

        if ($request->hasFile('avatar')) {
            request()->validate([
                'avatar' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:4048'],
            ]);
            $results = $this->imageUpload($request->file('avatar'), 600, 600);

            $attributes['avatar'] = json_encode($results);
        }

        Team::create($attributes);

        session()->flash('success', 'You have successfully added '. $attributes['first_name'] .' as a team member.');
        return back();
    }

    public function update(TeamStoreRequest $request, Team $team)
    {
        $attributes = $request->validated();

        if (request()->hasFile('avatar')) {
            request()->validate([
                'avatar' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:4048'],
            ]);

            if ($team->avatar) {
                $publicId = json_decode($team->avatar)->public_id;
                $this->imageDelete($publicId);
            }

            $results = $this->imageUpload(request()->file('avatar'), 600, 600);

            $attributes['avatar'] = json_encode($results);
        }

        $team->update($attributes);

        request()->session()->flash('success', 'You have successfully updated ' . $team->first_name . "'s record");
        return back();
    }

    public function destroy(Team $team)
    {
        if ($team->avatar) {
            $publicId = json_decode($team->avatar)->public_id;
            $this->imageDelete($publicId);
        }

        $team->delete();

        request()->session()->flash('success', 'You have successfully deleted the record');
        return back();
    }
}
