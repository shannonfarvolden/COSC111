<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Slide;
use App\Http\Controllers\Controller;

class SlidesController extends Controller
{
    /**
     * Create a new slides controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Delete a slide in the database.
     *
     * @param Slide $slide
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Slide $slide){

        $slide->delete();

        return back();
    }
}
