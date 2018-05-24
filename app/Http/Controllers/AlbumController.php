<?php

namespace App\Http\Controllers;

use App\Album;
use App\Gallery;

use Illuminate\Http\Request;
use ZipArchive;

class AlbumController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  /*
   * ////////////////////////////////////////////////////////////////////
   *
   * FOR ADMIN PAGE
   *
   * ///////////////////////////////////////////////////////////////////
   */

  public function adminIndex()
  {
    $albums = Album::all();

    return view('admin/album', compact('albums'));
  }


  public function view(Album $album) {
    $album = Album::find($album)->first();

    return view('admin/album_view', compact('album'));
  }


  public function create()
  {
    $gallery = Gallery::where('name', '=', 'Band')->first();
    return view('admin/album_form', compact('gallery'));
  }


  public function store(Request $request)
  {
    $path = 'Album/';

    $this->validate($request,[
      'title' => 'required|string|unique:albums',
      'released' => 'required',
      'note' => 'nullable|string',
      'summary' => 'required|string'
    ]);

    $logo = $request->file('logo');
    $logoExt = $logo->clientExtension();
    $logoName = $request->title .".".$logoExt;

    $logo->move('images/Album', $logoName);

    $newCover = $request->file('newCover');
    $defaultCover = $request->defaultCover;

    if($defaultCover == null && $newCover != null) {
      $coverExt = $newCover->clientExtension();
      $coverImage =  $request->title . ' Cover' .".". $coverExt;
      $newCover->move('images/Album', $coverImage);
    }else if($newCover == null && $defaultCover != null) {
      $coverImage = $defaultCover;
    }else {
      $coverImage = 'westlife-2.jpg';
    }

    Album::create([
      'title' => $request->title,
      'logo' => $path . $logoName,
      'summary' => $request->summary,
      'released' => $request->released,
      'cover' => $path. $coverImage,
      'note' => $request->note
    ]);

    return redirect('/admin/album');

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
    try {
      $album->delete();
      return redirect('/admin/album')->with('DeleteAlbum', 'Delete Album successfully');
    } catch (\Exception $e) {
      $e->getMessage();
    }
  }


  /*
   * ////////////////////////////////////////////////////////////////////
   *
   * FOR USER PAGE
   *
   * ///////////////////////////////////////////////////////////////////
   */

  public function index()
  {
    $albums = Album::all();

    return view('album/index', compact('albums'));
  }

  public function show($albumName)
  {

    $albumNa = preg_replace('/\-/', ' ', $albumName);
    $album = Album::where('title', '=', $albumNa)->first();

    foreach ($album->songs as $song) {
      $file = new mp3Controller("storage/albums/".$albumNa."/".$song->url);
      $duration = $file->getDuration();
      $length = mp3Controller::formatTime($duration);
      $song['length'] = $length;
    }

    return view('album/show', compact('album'));
  }

    public function listen($albumName)
    {
      $albumNa = preg_replace('/\-/', ' ', $albumName);
      $albumListen = Album::where('title', '=', $albumNa)->first();

      foreach ($albumListen->songs as $song) {
        $file = new mp3Controller("storage/albums/".$albumNa."/".$song->url);
        $duration = $file->getDuration();
        $length = mp3Controller::formatTime($duration);
        $song['length'] = $length;
      }

      return view('album/listen', compact('albumListen'));
    }


  public function download($albumName) {
    $albumNa = preg_replace('/\-/', ' ', $albumName);
    $songsDownload = array();

    $srcDir=public_path('/storage/albums/' . $albumNa);
    $zipFileName = $albumName.'.zip';
    $files = scandir($srcDir);

    foreach ($files as $file) {
      $ext = pathinfo($file, PATHINFO_EXTENSION);
      if($ext == 'mp3') {
        array_push($songsDownload, $file);
      }
    }

    $zip = new ZipArchive;
    $openZip = $zip->open($srcDir . '/' . $zipFileName,
      ZipArchive::CREATE | ZipArchive::OVERWRITE);
    if ($openZip === TRUE) {
      foreach ($songsDownload as $song){
        $zip->addFile($srcDir . '/'.$song);
      }
      $zip->close();
    }
    $filetopath = $srcDir.'/'.$zipFileName;

    if(file_exists($filetopath)){
      return response()->download($filetopath)->deleteFileAfterSend(true);
    }

    return redirect()->route('/album');

  }
}
