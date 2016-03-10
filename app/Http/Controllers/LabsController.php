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

    /**
     * Displays lab 2 view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lab2()
    {
        return view('labs.lab2');
    }
    /**
     * Displays lab 3 view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lab3()
    {
        return view('labs.lab3');
    }
    /**
     * Displays lab 4 view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lab4()
    {
        return view('labs.lab4');
    }
    /**
     * Displays lab 5 view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lab5()
    {
        return view('labs.lab5');
    }
    /**
     * Displays lab 6 view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lab6()
    {
        return view('labs.lab6');
    }
    /**
     * Displays lab 7 view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lab7()
    {
        return view('labs.lab7');
    }
    /**
     * Displays lab 8 view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lab8()
    {
        return view('labs.lab8');
    }
}

