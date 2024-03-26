<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tour;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('category/category', [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);  

        if(Category::where('name', $data['name'])->exists())
        {
            return redirect()->route('category.create')->with('error', 'Така категорія вже існує');
        }else{ 
  
         Category::create($data);
         $categoties = Category::all();
        }
        return view('category/category', ['categories' => $categoties]) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $category = Category::find($id);
        return view('category/show', ['category' => $category, 'tours' => Tour::where('category_name', $category->name)->get()]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);

        return view('category/edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);  

        Tour::where('category_name', Category::where('id', $id)->value('name'))->update(['category_name'=> $data['name']]);

        Category::where('id', $id)->update($data);
        return view('category/category', ['categories' => Category::all()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tour::where('category_name', Category::where('id', $id)->value('name'))->update(['category_name'=> "Без категорії"]);
     
        Category::where('id', $id)->delete();
        return view('category/category', ['categories' => Category::all()]);
    }
}
