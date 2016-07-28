<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Slide;

class SlidesController extends Controller {

    /**
     * Create a new slides controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weeks = Slide::all()->unique('lecture')->sortBy('lecture');

        return view('slide.index', ['weeks' => $weeks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate request
        $this->validate($request, ['slides.*'=>'required'], ['slides.*'=>'Files are required to make a submission']);
        $input = $request->except(['slides']);
        $slides = $request->file('slides');

            foreach ( $slides as $key=>$slide )
            {
                $invalid = [':', '/', '?', '#', '[', ']', '@'];
                $slidename = str_replace($invalid, '-', $slide->getClientOriginalName());
                $name = time() . $input['topic'] . $slidename;
                $slide->move('slides', $name);
                $input['image_path'] = 'slides/' . $name;
                $input['thumbnail_path'] = 'slides/tn-' . $name;
                $input['slide_number'] = $key;
                $newSlide = Slide::create($input);
                $newSlide->makeThumbnail();

            }
        return redirect()->action('SlidesController@adminIndex');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $slide_set
     * @return \Illuminate\Http\Response
     */
    public function show($slide_set)
    {
        $slides = Slide::where('slide_set', $slide_set)->orderBy('slide_number', 'asc')->get();

        return view('slide.show', ['slides' => $slides, 'slide_set' => $slide_set]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('slide.edit');
    }

    /**
     * Displays adminIndex of slides
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminIndex()
    {
        $slides = Slide::all()->unique('slide_set')->sortBy('slide_set');
        return view('slide.adminIndex', ['slides'=>$slides]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
