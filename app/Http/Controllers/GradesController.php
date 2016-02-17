<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class GradesController extends Controller
{

    /**
     * Create a new grades controller instance. User must be logged in to view pages.
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

        $grades = Auth::user()->grades;
        $quizzes = Auth::user()->quizzes()->withPivot('attempt')->orderBy('number', 'asc')->orderBy('pivot_attempt', 'asc')->get();

        return view('grade.index', ['grades'=>$grades, 'quizzes'=>$quizzes]);
    }
}
