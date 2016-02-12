<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AssignmentsController extends Controller
{
    /**
     * Create a new assignments controller instance. User must be logged in to view specified pages.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display the assignment 1 view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function assignment1()
    {
        return view('assignments.assignment1' );
    }
    /**
     * Display the assignment 2 view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function assignment2()
    {
        return view('assignments.assignment2' );
    }
}
