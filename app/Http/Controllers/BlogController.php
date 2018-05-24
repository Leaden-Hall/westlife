<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

  public function index()
  {
      $blogs = Blog::all();
      $albums = Album::orderBy('created_at', 'desc')->take(5)->get();
      return view('blog/index', compact('blogs', 'albums'));
  }


  public function create()
  {
      //
  }


  public function store(Request $request)
  {
      //
  }


  public function show($id)
  {
      $post = Blog::find($id);
      $comments = Blog::with('comments')->find($id)->comments;
      $albums = Album::orderBy('created_at', 'desc')->take(5)->get();
      return view('blog/post')->with(compact('post', 'comments', 'albums'));

  }


  public function edit(Blog $blog)
  {
      //
  }


  public function update(Request $request, Blog $blog)
  {
      //
  }


  public function destroy(Blog $blog)
  {
      //
  }

  public function about() {
    $albums = Album::orderBy('created_at', 'desc')->take(5)->get();
    return view('about', compact('albums'));
  }

  public function manageBlog() {
    $user = Auth::user();
    $blogs = $user->Blogs;
    return view('account/blogs', compact('blogs', 'user'));
  }

  public function editBlog(Blog $blog) {
    $user = Auth::user();

  }
}
