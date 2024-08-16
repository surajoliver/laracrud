<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes['color'] = request('color');
        // $attributes['size'] = request('size');
        // $attributes['gender'] = request('gender');
        $validated = $request->validate([
            'name' => 'required|max:100',
            'price' => 'required|numeric',
            'status' => 'required',
            'user_id' => 'required',
            'description' => 'nullable',
        ]);
        $validated['attributes'] = json_encode($attributes);
        $validated['active'] = $request->has('active') ? 1: 0;

        Product::create($validated);

        return redirect('/products');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // $k = $product->attributes;
        // $k2 = html_entity_decode($k);
        // $l = json_decode( $k2, TRUE);
        // foreach($l as $key=>$value) {
        //     echo $key . $value;
        // }
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {  
        $attributes['color'] = request('color');
        var_dump($attributes); 
        $validated = $request->validate([
            'name' => 'required|max:100',
            'price' => 'required|numeric',
            'status' => 'required',
            'user_id' => 'required',
            'description' => 'nullable',
        ]);
        
        $validated['attributes'] = json_encode($attributes);
        $validated['active'] = $request->has('active') ? 1: 0;
        $product->update($validated);

        return redirect(route('products.show', $product));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }
}
