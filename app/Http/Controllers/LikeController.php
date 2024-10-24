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

    public function create()
    {
        return view('Like.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'post_id' => 'required'
        ]);

        $Like = new Like();
        $Like->name = $request->name;
        $Like->save();
        return redirect('/like')->with('success', 'Like successfully added');
    }

    public function show($id)
    {
        $model = Like::find($id);
        return view('like.show', ['model' => $model]);
    }

    
    public function delete($id)
    {
        $model = Like::find($id);
        $model->delete();
        return redirect('/like')->with('success', 'Like successfully deleted');
    }
}
