<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

  public function index()
  {
      $blogs = Blog::all();
      return view('blog/index')->with('blogs', $blogs);
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
      return view('blog/post')->with(compact('post', 'comments'));

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
    return view('about');
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
