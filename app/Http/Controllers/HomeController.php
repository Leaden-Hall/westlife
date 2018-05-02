<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Album;

class HomeController extends Controller
{

    public function __construct()
    {
    }


    public function index()
    {
      $featureTours = Tour::orderBy('start', 'desc')->take(6)->get();
      $featureAlbums = Album::where('note', '=', 'feature')->take(3)->get();
      $greatestAlbums = Album::where('note', '=', 'feature')->take(3)->get();
      return view('home',  compact('featureTours', 'featureAlbums', 'greatestAlbums'));

    }

}
