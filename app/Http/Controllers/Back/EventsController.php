<?php

namespace App\Http\Controllers\Back;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::get();

        return view('back.events.index', compact('events'));
    }

    public function create()
    {
        return view('back.events.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:events,slug',
            'description' => 'required',
            'thumbnail' => 'required'
        ]);

        $event = new Event;
        $event->title = $request->title;
        $event->slug = $request->slug;
        $event->description = $request->description;

        if(isset($request->thumbnail)){
            $img = Image::make($request->thumbnail);
            $ext = $request->thumbnail->extension();
            $filename = 'img_'.date('sdHmYl').'_'.rand(1000, 9000).'.'.$ext;

            $img->resize(1000,1000, function ($constraints) {
                $constraints->aspectRatio();
                $constraints->upsize();
            })->save('public/img/'.$filename);

            $event->thumbnail = $filename;
        }


        $event->save();

        return redirect()->route('events.index');

    }

    public function edit(Event $event)
    {
        return view('back.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $event->title = $request->title;
        $event->description = $request->description;

        if(isset($request->thumbnail)){
            $img = Image::make($request->thumbnail);
            $ext = $request->thumbnail->extension();
            $filename = 'img_'.date('Y M d (l)').'_'.rand(1000, 9000).'.'.$ext;

            $img->resize(1000,1000, function ($constraints) {
                $constraints->aspectRatio();
                $constraints->upsize();
            })->save('public/img/'.$filename);

            if(!empty($event->thumbnail)) {
                @unlink('public/img/'.$event->thumbnail);
            }

            $event->thumbnail = $filename;

        }
        $event->save();

        return redirect()->route('events.index');
    }


}
