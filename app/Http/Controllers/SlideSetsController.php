<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\SlideSet;
use App\Slide;

class SlideSetsController extends Controller {

    /**
     * Create a new slides controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['except' => [
            'index',
            'show',
        ]]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slidesets = SlideSet::all()->sortBy('week');

        return view('slideset.index', ['slidesets' => $slidesets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('slideset.create');
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
        $this->validate($request, ['topic' => 'required', 'week' => 'required']);

        $slide = SlideSet::create($request->all());

        return redirect()->action('SlideSetsController@index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function addSlide(SlideSet $slideset, Request $request)
    {
        //get file
        $slide = $request->file('file');

        //replace invalid symbols
        $invalid = [':', '/', '?', '#', '[', ']', '@'];
        $slidename = str_replace($invalid, '-', $slide->getClientOriginalName());

        //add time to filename to make it unique
        $name = time() . $slidename;

        //move and create slide
        $slide->move('slides', $name);
        $input['image_path'] = 'slides/' . $name;
        $input['thumbnail_path'] = 'slides/tn-' . $name;
        $input['slide_number'] = $this->slideNumber($slidename);
        $newSlide = $slideset->slides()->create($input);
        $newSlide->makeThumbnail();

        return 'Slide ' . $newSlide->id . ' successfully added.';
    }

    /**
     * Return slide number based on filename.
     *
     * @param $slidename
     * @return int
     */
    public function slideNumber($slidename)
    {

        // split file name
        $split = explode('.', $slidename);

        //assign file name
        $name = $split[count($split) - 2];

        //assign slide number based on how name is slide is named
        $slideNum = is_numeric($name[strlen($name) - 2]) ? intval(substr($name, -2)) : intval(substr($name, -1));

        return $slideNum;
    }

    /**
     * Display the specified resource.
     *
     * @param  Slideset $slideset
     * @return \Illuminate\Http\Response
     */
    public function show(Slideset $slideset)
    {
        return view('slideset.show', ['slideset' => $slideset]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  SlideSet $slideset
     * @return \Illuminate\Http\Response
     */
    public function edit(SlideSet $slideset)
    {
        $slides = Slide::where('slide_set', $id)->orderBy('slide_number', 'asc')->get();

        return view('slideset.edit', ['slides' => $slides]);
    }

    /**
     * Displays adminIndex of slides
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminIndex()
    {
        $slides = Slide::all()->unique('slide_set')->sortBy('slide_set');

        return view('slideset.adminIndex', ['slides' => $slides]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SlideSet $slideset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SlideSet $slideset)
    {
        $slideset->update($request->all());
        redirect()->action('SlideSetsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $id->delete();

        return redirect()->action('SlideSetsController@index');
    }

}
