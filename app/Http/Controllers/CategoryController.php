<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class CategoryController extends Controller
{
    public function category()
    {
        $all = Category::all();
        return view('Category.category', ['categories' => $all]);
    }

    public function create()
    {
        return view('Category.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/category')->with('success', 'Category successfully added');
    }

    public function show($id)
    {
        $model = Category::find($id);
        return view('Category.show', ['model' => $model]);
    }

    public function delete($id)
    {
        $model = Category::find($id);
        $model->delete();
        return redirect('/category')->with('success', 'Category successfully deleted');
    }
}
