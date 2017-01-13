<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\SlideSet;
use App\Video;


class VideosController extends Controller
{
    /**
     * Create a new Videos controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Show the form for creating a Video.
     * @param SlideSet $slideset
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(SlideSet $slideset)
    {
        return view('videos.create', ['slideset'=>$slideset]);
    }

    /**
     * Store a Video in storage.
     *
     * @param Request $request
     * @param SlideSet $slideset
     */
    public function store(Request $request, SlideSet $slideset)
    {
        $input = array_add($request->all(), 'slide_set_id', $slideset->id);
        Video::create($input);

        return redirect()->action('SlideSetsController@show',$slideset);

    }
    /**
     * Show the form for editing a Video.
     *
     * @param  Video $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('videos.edit', ['video'=>$video]);
    }
    /**
     * Update a Video in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Video $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $video->update($request->all());
        return redirect()->action('SlideSetsController@show',$video->slide_set_id);
    }

    /**
     * Remove a Video from storage.
     *
     * @param  Video $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return back();
    }
}
