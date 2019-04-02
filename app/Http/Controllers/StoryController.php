<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\storylist;

class StoryController extends Controller
{
    public function index()
    {
        $stories = storylist::all();
        return view('layouts.index')->with('stories', $stories);
    }

    public function thriller()
    {
        $stories = storylist::all();
        return view('layouts.thriller')->with('stories', $stories);
    }

    public function fantasy()
    {
        $stories = storylist::all();
        return view('layouts.fantasy')->with('stories', $stories);
    }

    public function western()
    {
        $stories = storylist::all();
        return view('layouts.western')->with('stories', $stories);
    }

    public function detective()
    {
        $stories = storylist::all();
        return view('layouts.detective')->with('stories', $stories);
    }


    public function create()
    {
        return view('Story.create');
    }
      
    public function store(Request $request)
    {
        $this->validate($request, [
            'storyTitle' => 'required',
            'storybody' => 'required',        
            'category' => 'required',
        ]);

        $stories= new storylist;
        $stories->storyTitle= $request->input('storyTitle');
        $stories->storybody= $request->input('storybody');
        $stories->category= $request->input('category');
        
        $stories->save();

        return redirect('/')->with('sucess');
    


    }
}
