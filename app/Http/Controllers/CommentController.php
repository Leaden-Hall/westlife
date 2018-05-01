<?php

namespace App\Http\Controllers;


use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $input = $request->all();
        $comment = new Comment;
        $comment->content = $input["content"];
        $comment->blog_id = $input["blog"];
        $comment->commenter = Auth::user()->username;
        $comment->save();
        return redirect('blog/'.$input["blog"]. '#commentSection');
    }


    public function show(Comment $comment)
    {
        //
    }


    public function edit($id)
    {
        $check_edit = true;
        $comment = Comment::find($id);
        $content = $comment->content;
        session(['id' => $id]);
        return redirect('blog/'.$comment->blog_id. '#commentSection')->with('content',$content);

    }

    public function update(Request $request,  $id)
    {
        $input = $request->all();
        $comment = Comment::find(session('id'));
        $comment->content = $input["content"];
        $comment->save();
        return redirect('blog/'.$input["blog"]. '#commentSection');
    }


    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->back();
    }
}
