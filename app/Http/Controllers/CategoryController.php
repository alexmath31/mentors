<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {

        $categories = \App\Models\Category::all();


        return view('categories.index', ['categories'=>$categories,]);
    }

    public function show(string $id)
    {
        $category = \App\Models\Category::query()
        ->findOrFail($id);

        return view('categories.show', ['category'=>$category],);
    }

}
