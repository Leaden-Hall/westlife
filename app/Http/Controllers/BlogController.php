<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{

  public function index()
  {
      $blogs = Blog::orderBy('created_at', 'desc')->get();
      $albums = Album::orderBy('created_at', 'desc')->take(5)->get();
      return view('blog/index', compact('blogs', 'albums'));
  }

    public function index_admin()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('admin/blog')->with('blogs', $blogs);
    }


  public function create()
  {
      return view('admin/blog_form');
  }


  public function store(Request $request)
  {
    $path = 'Blogs/';

    $this->validate($request,[
        'title' => 'required|unique:blogs',
        'summary' => 'required',
        'content' => 'required',
        'logo'    => 'image|required|max:1999'
    ]);

    $logo = $request-> file('logo');
    $logoExt = $logo->clientExtension();
    $logoName = $path . time() .".".$logoExt;
    $logo->move('images/Blogs', $logoName);

      $input = $request->all();
      $blog = new Blog;
      $blog->title = $input["title"];
      $blog->summary = $input["summary"];
      $blog->content = $input["content"];
      $blog->logo = $logoName;
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


  public function update(Request $request, Blog $blog)
  {
    $path = 'Blogs/';

    if($request->title == null) {
      $this->validate($request,[
        'summary' => 'required',
        'content' => 'required',
        'logo' => 'nullable|image'
      ]);
      $blogTitle = $blog->title;
    }else {
      $this->validate($request,[
        'title' => 'required',
        'summary' => 'required',
        'content' => 'required',
        'logo' => 'nullable|image'
      ]);
      $blogTitle = $request->title;
    }

    $updateLogo = $request-> file('logo');

    if($updateLogo != null) {
      $updateLogoExt = $updateLogo->clientExtension();
      $updateLogoName = $path . time() .".".$updateLogoExt;
      $updateLogo->move('images/Blogs', $updateLogoName);
      \File::delete('images/'. $blog->logo);
    }else {
      $updateLogoName = $blog->logo;
    }



    $blog->update ([
      'title' => $blogTitle,
      'summary' =>$request->summary,
      'logo' => $updateLogoName,
      'content' => $request->content,
      'published_by' => Auth::user()->username
    ]);

    return redirect('admin/blog')->with('updateBlog', 'Update Blog Post Successfully');
  }


  public function destroy($id)
  {
      Blog::find($id)->delete();
      return redirect('admin/blog')->with('deleteBlog', 'Delete Blog Post Successfully');
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

}
