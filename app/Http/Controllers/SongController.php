<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Song $song)
    {
        //
    }


    public function edit(Song $song)
    {
        //
    }


    public function update(Request $request, Song $song)
    {
        //
    }


    public function destroy(Song $song)
    {
        //
    }

    public function download($albumName, $songName) {
      $albumNa = preg_replace('/\-/', ' ', $albumName);
      $songNa = preg_replace('/\-/', ' ', $songName);

      $songPath = 'storage/albums/' . $albumNa . '/' . $songNa . '.mp3';

      return redirect('/' . $songPath);
    }
}
