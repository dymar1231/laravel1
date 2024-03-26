<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Tour;
use App\Models\Category;
use App\Models\Post;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('welcome/welcome', [
            'tours' => Tour::all(),
            'posts' => Post::all(),
            'categories' => Category::all(),
      ]);
    }

    public function showTours(Request $request)
    {
      if($request) {
        $data = $request->validate([
          'category_name' => 'required|string',
        ]);
        $tours = Tour::where('category_name', $data['category_name'])->get();
      }else {
        $tours = Tour::all();
      }
      return view('welcome/welcome', [
        'tours' => $tours,
        'posts' => Post::all(),
        'categories' => Category::all(),
      ]);
    }

    public function create()
    {
        return view('welcome/create');
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'tour_name' => 'required|string',
            'price' => 'required|string',
            'days' => 'required|numeric',
            'phone_number' => 'required|string',
            'email' => 'required|string',
            'fullname' => 'required|string',
        ]);

        Order::create($data);

        return redirect()->route('welcome');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('welcome/show', ['tour' => Tour::find($id)]);
    }

    public function poststore(Request $request) {
      $data = $request->validate([
        'name' => 'required|string',
        'description' => 'required|string',
      ]);

      Post::create($data);
      return redirect()->route('welcome');
    }

    
    
}
