<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    public function index()
    {
      $albums = Album::all();

      return view('album/index', compact('albums'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($albumName)
    {
      $albumNa = preg_replace('/\-/', ' ', $albumName);
      $album = Album::where('title', '=', $albumNa)->first();
      return view('album/show', compact('album'));
    }


    public function edit(Album $album)
    {
        //
    }


    public function update(Request $request, Album $album)
    {
        //
    }


    public function destroy(Album $album)
    {
        //
    }
}
