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
     * Display the consent form view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function assignment1()
    {
        return view('assignments.assignment1' );
    }
}
