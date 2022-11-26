<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $includeProducts = $data['includeProducts'];
        switch ($includeProducts) {
            case 0:
                $categories = Category::all()->toArray();
                return array_values($categories);
                
            case 1:
                $categories = Category::all()->toArray();
                $products = Product::all()->toArray();
                $mix = array_merge($categories,$products);
                return array_values($mix); 
        }
    }
    public function indexProducts($id)
    {
        $products = Product::all()->where('parent_id', $id)->toArray();
        return array_values($products);      
    }

    public function indexInclude($id, Request $request)
    {
        $data = $request->all();
        $includeProducts = $data['includeProducts'];
        $category = Category::all()->where('id', $id)->toArray();
        $products = Product::all()->where('parent_id', $id)->toArray();
        $mix = array_merge($category,$products);
        return array_values($mix); 
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
