<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like()
    {
        $all = Like::all();
        return view('Like.like', ['Likes' => $all]);
    }
}
