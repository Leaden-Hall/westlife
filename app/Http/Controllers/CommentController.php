<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $comment = new Comment;
        $comment->content = $input["content"];
        $comment->blog_id = $input["blog"];
        $comment->commenter = Auth::user()->username;
        $comment->save();
       // Session::flash('message', 'Successfully added comment!');
        //return Redirect::to('blog');
        //return redirect()->route('blog',  ['id' =>[$input["blog"]]]);
        //return view('blog/post')->with('post', Blog::find($input["blog"]));
        //return back()->withInput();
        return redirect('blog/'.$input["blog"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        $check_edit = true;
        $comment = Comment::find($id);
        $content = $comment->content;
        session(['id' => $id]);
        return redirect('blog/'.$comment->blog_id)->with('content',$content);
        //return Redirect::route('blog' , array(true => $check_edit, $comment->content => $content));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $input = $request->all();
        $comment = Comment::find(session('id'));
        $comment->content = $input["content"];
        $comment->save();
        return redirect('blog/'.$input["blog"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        // redirect
        //Session::flash('message', 'Successfully deleted the comment!');
        return redirect()->back();
    }
}
