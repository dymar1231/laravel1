<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Tour;

class OrderController extends Controller
{
    public function index()
    {
        return view("order/order", ["orders" => Order::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("order/create", ["tours" => Tour::all()]);   
    }

    /**
     * Store a newly created resource in storage.
     */
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

        return view("order/order", ["orders" => Order::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view("order/show", ["order" => Order::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("order/edit", ["order" => Order::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Order::find($id)->update($request->all());
        
        return view("order/order", ["orders" => Order::all()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::find($id)->delete();
        return redirect()->back();
    }
}
