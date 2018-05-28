<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;
use App\Album;

class SongController extends Controller
{

    public function index()
    {
        $songs = Song::all();
        return view('admin/song', compact('songs'));
    }


    public function create()
    {
        $albums = Album::all();
        return view ('admin/song_form', compact('albums'));
    }


    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'string|required',
        'album' => 'numeric|required',
        'upload' => 'file|required'
      ]);

      $albumName = Album::where('id', '=', $request->album)->first()->title;

      $song = $request->file('upload');
      $songExt = $song->getClientOriginalExtension();
      $songName = $request->name . "." .$songExt;
      $song->move('albums/'.$albumName, $songName);

      Song::create([
        'album_id' => $request->album,
        'name' => $request->name,
        'url' => $songName
      ]);

      $songs = Song::all();

      return redirect('admin/song')->with('addSong', 'A new song has been added successfully');

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

      try {
        $song->delete();
        return redirect('admin/song')->with('deleteSong', 'The song has been deleted successfully');
      } catch (\Exception $e) {
        $e->getMessage();
      }


    }

    public function download($albumName, $songName) {
      $albumNa = preg_replace('/\-/', ' ', $albumName);
      $songNa = preg_replace('/\-/', ' ', $songName);

      $songPath = 'storage/albums/' . $albumNa . '/' . $songNa . '.mp3';

      return redirect('/' . $songPath);
    }
}
