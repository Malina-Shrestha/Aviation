<?php

namespace App\Http\Controllers\Front;

use App\ContactQuery;
use App\Event;
use App\Gallery;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::take(3)->latest()->get();
        $testimonials = Testimonial::take(3)->get();
        $galleries = Gallery::take(8)->get();

        return view('front.home.index',compact('events', 'testimonials', 'galleries'));
    }

    public function gallery()
    {
        $galleries = Gallery::take(9)->latest()->get();
        $recentEvents = Event::orderBy('id','DESC')->take(4)->get();
        return view('front.home.gallery',compact('galleries','recentEvents'));
    }

    public function contactdetails()
    {
        $contactquery = ContactQuery::get();
        // return $contactquery;
        return view('front.home.contact', compact('contactquery'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email'=> 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contactquery = new ContactQuery;
        $contactquery->name = $request->name;
        $contactquery->email = $request->email;
        $contactquery->subject = $request->subject;
        $contactquery->message = $request->message;
        $contactquery->save();

        return redirect()->back()->with('success','Message sent');
    }

    public function whywe()
    {
        return view('front.aboutus.whywe');
    }

    public function who()
    {
        return view('front.aboutus.who');
    }

    public function mission()
    {
        return view('front.aboutus.mission');
    }

    public function message()
    {
        return view('front.aboutus.message');
    }

    public function cabincrew()
    {
        return view('front.training.cabincrew');
    }

    public function airport()
    {
        return view('front.training.airport');
    }

    public function plot()
    {
        return view('front.training.plot');
    }

    public function aircraft()
    {
        return view('front.training.aircraft');
    }

    public function show()
    {
        $events = Event::orderBy('id','DESC')->get();
        $recentEvents = Event::orderBy('id','DESC')->take(4)->get();
        return view('front.event.show', compact('events','recentEvents'));

    }

    public function eventDetail($slug)
    {
        $event = Event::where('slug',$slug)->first();
        $recentEvents = Event::orderBy('id','DESC')->take(4)->get();
        return view('front.event.detail', compact('event','recentEvents'));
    }

    public function faq()
    {
        return view('front.home.faq');
    }
}
