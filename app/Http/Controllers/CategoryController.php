<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all()->toArray();
        return array_reverse($categories);      
    }
    public function store(Request $request)
    {
        $category = new Category([
            'name' => $request->input('name')
        ]);
        $category->save();
        return response()->json('Category created!');
    }
    public function show($id)
    {
        $category = Category::find($id);
        return response()->json($category);
    }
    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->update($request->all());
        return response()->json('Category updated!');
    }
}
