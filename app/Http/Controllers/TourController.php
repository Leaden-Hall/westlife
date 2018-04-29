<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{

    public function index()
    {
      $tours = Tour::all();

      return view('tour',  compact('tours'));

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function edit(Tour $tour)
    {
        //
    }


    public function update(Request $request, Tour $tour)
    {
        //
    }


    public function destroy(Tour $tour)
    {
        //
    }
}
