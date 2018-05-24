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

    public function index_admin()
    {
        $blogs = Blog::all();
        return view('admin/blog')->with('blogs', $blogs);
    }


  public function create()
  {
      return view('admin/blog_form');
  }


  public function store(Request $request)
  {
      $this->validate($request,[
          'title' => 'required',
          'summary' => 'required',
          'content' => 'required',
          'logo'    => 'image|required|max:1999'
      ]);

      if ($request->hasFile('logo')){
          $filenameWithExt = $request->file('logo')->getClientOriginalName();
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
          $extension = $request-> file('logo')->getClientOriginalExtension();
          $filenameToStore = $filename.'_'.time().'_'.$extension;
          $path = $request-> file('logo')->storeAs('public/logos', $filenameToStore);
      }else{
          $filenameToStore = 'noimage.jpg';
      }

      $input = $request->all();
      $blog = new Blog;
      $blog->title = $input["title"];
      $blog->summary = $input["summary"];
      $blog->content = $input["content"];
      $blog->logo = $filenameToStore;
      $blog->published_by = Auth::user()->username;
      $blog->save();

      return redirect('admin/blog');
  }


  public function show($id)
  {
      $post = Blog::find($id);
      $comments = Blog::with('comments')->find($id)->comments;
      $albums = Album::orderBy('created_at', 'desc')->take(5)->get();
      return view('blog/post')->with(compact('post', 'comments', 'albums'));

  }


  public function edit($id)
  {
      $blog = Blog::find($id);
      return view('admin/blog_edit')->with('blog', $blog);
  }


  public function update(Request $request, $id)
  {
      $this->validate($request,[
          'title' => 'required',
          'summary' => 'required',
          'content' => 'required',
      ]);

      $editFile = false;
        if ($request->hasFile('logo')){
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request-> file('logo')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'_'.$extension;
            $path = $request-> file('logo')->storeAs('public/logos', $filenameToStore);
            $editFile = true;
        }else{
            $filenameToStore = 'noimage.jpg';
        }

      $input = $request->all();
      $blog = Blog::find($id);
      $blog->title = $input["title"];
      $blog->summary = $input["summary"];
      $blog->content = $input["content"];
      if ($editFile){
          $blog->logo = $filenameToStore;
      }
      //$blog->logo = $filenameToStore;
      //$blog->published_by = Auth::user()->username;
      $blog->published_by = 'thanhh';
      $blog->save();

      return redirect('admin/blog');
  }


  public function destroy($id)
  {
      Blog::find($id)->delete();
      return redirect('admin/blog');
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
