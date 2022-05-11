<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->code = $request->code;
        $product->slug = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->wrongPrice = $request->wrongPrice;
        $product->size = implode( " ", $request->size);
        $product->image = $request->image;
        $product->save();
        $product->categories()->sync($request->category_id);
        $product->colors()->sync($request->color_id);
        $product->tags()->sync($request->tag_id);
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.edit', compact('product'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->code = $request->code;
        $product->slug = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->wrongPrice = $request->wrongPrice;
        $product->size = implode( " ", $request->size);
        $product->image = $request->image;
        $product->save();
        $product->categories()->sync($request->category_id);
        $product->colors()->sync($request->color_id);
        $product->tags()->sync($request->tag_id);
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products');
    }
}
