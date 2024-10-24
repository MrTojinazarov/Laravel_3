<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment()
    {
        $all = Comment::all();
        return view('Comment.comment', ['comments' => $all]);
    }

    public function create()
    {
        return view('Comment.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'post_id' => 'required|extends:Post,id',
            'body' => 'required'
        ]);

        $Comment = new Comment();
        $Comment->name = $request->name;
        $Comment->save();
        return redirect('/comment')->with('success', 'Comment successfully added');
    }

    public function show($id)
    {
        $model = Comment::find($id);
        return view('comment.show', ['model' => $model]);
    }

    
    public function delete($id)
    {
        $model = Comment::find($id);
        $model->delete();
        return redirect('/comment')->with('success', 'Comment successfully deleted');
    }
}
