<?php

namespace App\Http\Controllers\Back;

use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialsController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::get();

        return view('back.testimonials.index',compact('testimonials'));
    }

    public function create()
    {
        return view('back.testimonials.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        $testimonial = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;
        $testimonial->save();

        flash('Message sent', 'success');

        return redirect()->route('testimonials.index');

    }

    public function edit(Testimonial $testimonial)
    {
        return view('back.testimonials.edit',compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);


        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;
        $testimonial->save();

        return redirect()->route('testimonials.index');


    }
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index');
    }
}
