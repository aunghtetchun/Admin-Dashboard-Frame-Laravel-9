<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function sample(){
        return view('sample');
    }
    public function advanceForm(){
        return view('sample.form.advance_form');
    }
    public function validation(){
        return view('sample.form.validation');
    }
    public function gallery(){
        return view('sample.component.gallery');
    }
    public function cuser(){
        return view('sample.component.cuser');
    }
    public function carousel(){
        return view('sample.component.carousel');
    }
    public function tab(){
        return view('sample.component.tab');
    }
    public function article(){
        return view('sample.component.article');
    }
}
