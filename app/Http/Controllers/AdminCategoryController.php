<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view ('admin.categories.index',['categories'=>$categories,]);
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $request->validate(['name'=>['required','min:5', 'max:20']]);

        $category= Category::firstOrCreate([
            'name'=>$request->name,
        ]);

        return redirect()->route ('admin.categories.create');
    }

    public function show(string $id)
    {
        $category = Category::query()
            ->find($id);
        return view ('admin.categories.show', ['category'=>$category,]);
    }


    public function edit(string $id)
    {
        $category = Category::query()
            ->find($id);
        return view('admin.categories.edit', ['category'=>$category,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(['name'=>['required','min:5', 'max:20']]);

        $category = Category::query()
            ->find($id);

        $category->update(['name'=>$request->name,]);

        session()->flash('success', "Category '{{$category->name}}' Updated Successfully");

        return redirect()->route('admin.categories.show', $category->id);
    }


    public function destroy(string $id)
    {
        $category = Category::query()
            ->find($id);

        $category->delete();

        session()->flash('success', "Category '{{$category->name}}' Deleted Successfully");

        return redirect ()->route('admin.categories.index');
    }
}
