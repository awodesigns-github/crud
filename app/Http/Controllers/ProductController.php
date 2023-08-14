<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Mockery\Matcher\Ducktype;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::latest();
        return view('product.index', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Product::create($request->all());

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $id)
    {
        return view('product.show',['product' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $id)
    {
        return view('product.edit',['product' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $id)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $id->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $id)
    {
        $id->delete();

        return redirect()->route('product.destroy');
    }
}
