<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $featureTours = Tour::orderBy('start', 'desc')->take(6)->get();

      return view('home',  compact('featureTours'));

    }

    public function featureTour()
    {

    }
}
