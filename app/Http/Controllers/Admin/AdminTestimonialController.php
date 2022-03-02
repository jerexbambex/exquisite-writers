<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialStoreRequest;
use App\Http\Traits\ImageUpload;

class AdminTestimonialController extends Controller
{
    use ImageUpload;

    public function index()
    {
        $testimonials = Testimonial::all();

        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function store(TestimonialStoreRequest $request)
    {
        $attributes = $request->validated();

        if ($request->hasFile('avatar')) {
            request()->validate([
                'avatar' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            ]);
            $results = $this->imageUpload($request->file('avatar'), 475, 475);

            $attributes['avatar'] = json_encode($results);
        }

        Testimonial::create($attributes);

        session()->flash('success', 'Testimonial successfully added.');
        return back();
    }

    public function update(TestimonialStoreRequest $request, Testimonial $testimonial)
    {
        $attributes = $request->validated();

        if (request()->hasFile('avatar')) {
            request()->validate([
                'avatar' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            ]);

            if ($testimonial->avatar) {
                $publicId = json_decode($testimonial->avatar)->public_id;
                $this->imageDelete($publicId);
            }

            $results = $this->imageUpload(request()->file('avatar'), 475, 475);

            $attributes['avatar'] = json_encode($results);
        }

        $testimonial->update($attributes);

        request()->session()->flash('success', 'Record successfully updated');
        return back();
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->avatar) {
            $publicId = json_decode($testimonial->avatar)->public_id;
            $this->imageDelete($publicId);
        }

        $testimonial->delete();

        request()->session()->flash('success', 'You have successfully deleted the record');
        return back();
    }
}
