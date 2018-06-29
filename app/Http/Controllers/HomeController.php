<?php

namespace be_nomad_app\Http\Controllers;

use Illuminate\Http\Request;
use be_nomad_app\Users;
use be_nomad_app\Destinations;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destinations::all();
        //dd($destinations);
        return view('welcome',compact('destinations'));
    }
}
