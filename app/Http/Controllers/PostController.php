<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post()
    {
        $all = Post::all();
        return view('Post.post', ['posts' => $all]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('Post.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);

        $Post = new Post();
        $Post->title = $request->title;
        $Post->category_id = $request->category_id;
        $Post->body = $request->body;
        $Post->likes = 0;
        $Post->dislikes = 0;
        // dd($Post->body);
        $Post->save();
        return redirect('/post')->with('success', 'Post successfully added');
    }


    public function show($id)
    {
        $model = Post::find($id);
        return view('post.show', ['model' => $model]);
    }

    
    public function delete($id)
    {
        $model = Post::find($id);
        $model->delete();
        return redirect('/post')->with('success', 'Post successfully deleted');
    }
}
