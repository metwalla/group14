<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return new ProductResource($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $product = Product::findOrFail($id);
        }
        catch(ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Product not found.',
                'detail' => $e->getMessage()
            ], 404);
        }
        return new ProductResource($product);
    }

    public function showByCategory($category) {
        $products = Product::where('category', '=', $category)->get();
        return ProductResource::collection($products);
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
        try {
            $product = Product::findOrFail($id);
            $product->update($request->all());
        }
        catch(ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Product not found.',
                'detail' => $e->getMessage()
            ], 404);
        }
        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
        }
        catch(ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Product not found.',
                'detail' => $e->getMessage()
            ], 404);
        }
        return response()->json(null, 204);
    }
}
