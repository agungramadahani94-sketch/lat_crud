<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        Products::create($data);

        return redirect()->route('products.index');
    }

    public function edit(Products $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Products $product)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $product->update($data);

        return redirect()->route('products.index');
    }

    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}