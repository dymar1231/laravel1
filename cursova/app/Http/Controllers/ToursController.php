<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Tour;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
       return view("tour/tour", ['tours' => Tour::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('tour/create',['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'days' => 'required|numeric',
            'status' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|file|image|mimes:jpg,png,jpeg',
            'category_name' => 'required|string',
        ]);
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            
            $path = $file->store('uploads','public');

            $validatedData['image'] = $path;
        }
    
        Tour::create($validatedData);
    
        return view('tour/tour',['tours'=>Tour::all()]);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return view('tour/show', ['tour' => Tour::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       return view('tour/edit',['tour' => Tour::find($id),'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validatedData = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'days' => 'required|numeric',
            'status' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|file|image|mimes:jpg,png,jpeg',
            'category_name' => 'required|string',
        ]);
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            
            $path = $file->store('uploads','public');

            $validatedData['image'] = $path;
        }


        $tour = Tour::find($id);
        $tour->update($validatedData);
        return redirect()->route('tours');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $file_path = Tour::find($id)->image;
        unlink(public_path("/storage/{$file_path}"));
        Tour::find($id)->delete();

        return redirect()->route('tours');
    }
}
