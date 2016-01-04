<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LabsController extends Controller
{

    /**
     * Create a new labs controller instance. User must be logged in to view pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Displays lab 1 view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lab1()
    {
        return view('labs.lab1');
    }

    /**
     * Displays eclipse view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function eclipse()
    {
        return view('labs.eclipse');
    }


    /**
     * Displays eclipse view.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function school()
    {
        return view('labs.school');
    }
}
