<?php

namespace App\Http\Controllers\Back;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class GalleriesController extends Controller
{
    public function index()
    {
        $galleries = Gallery::get();

        return view('back.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('back.galleries.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required'
        ]);

        $gallery = new Gallery;

        if(isset($request->image)){
            $img = Image::make($request->image);
            $ext = $request->image->extension();
            $filename = 'img_'.date('sdHmYl').'_'.rand(1000, 9000).'.'.$ext;

            $img->resize(1000,1000, function ($constraints) {
                $constraints->aspectRatio();
                $constraints->upsize();
            })->save('public/img/'.$filename);

            $gallery->image = $filename;
        }


        $gallery->save();

        return redirect()->route('galleries.index');

    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('galleries.index');
    }

}
