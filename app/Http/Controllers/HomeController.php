<?php

namespace App\Http\Controllers;

use App\Tour;
use App\Album;

class HomeController extends Controller
{

  public function index()
  {
    $featureTours = Tour::orderBy('start', 'desc')->take(6)->get();
    $featureAlbums = Album::where('note', '=', 'feature')->take(3)->get();
    $greatestAlbums = Album::where('note', '=', 'feature')->take(3)->get();
    return view('home',  compact('featureTours', 'featureAlbums', 'greatestAlbums'));

  }

  public function contactPage() {
    return view('contact');
  }

}
