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
}
