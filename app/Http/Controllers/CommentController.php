<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index',['comments'=>$comments]);
    }

    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->text = $request->text;
        $comment->save();
        return redirect('/comments');
    }
}
