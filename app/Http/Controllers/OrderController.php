<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = Order::create($request->all());
        return response()->json($order, 201);
    }

    public function index()
    {
        $orders = Order::with(['customer', 'product'])->get();
        return response()->json($orders);
    }
}
