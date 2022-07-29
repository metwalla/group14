<?php

namespace App\Http\Controllers;

use App\Http\Resources\CartItemResource;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cart = Cart::where('user_id', $request->user()->id)->get()->first();
        return new CartResource($cart);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $cart = new Cart($request->all());
        $cart->user()->associate($user);
        $cart->save();
        return new CartResource($cart);
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
            $cart = Cart::findOrFail($id);
        }
        catch(ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Cart not found.',
                'detail' => $e->getMessage()
            ], 404);
        }
        return new CartResource($cart);
    }

    /**
     * Get the cart items
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cartItems(Request $request) {
        try {
            $user = User::findOrFail($request->user()->id);
            $cart = Cart::where("user_id", $user->id)->first();
            $cartItems = $cart->cartItems()->get();
        }
        catch(ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Cart not found.',
                'detail' => $e->getMessage()
            ], 404);
        }
        return CartItemResource::collection($cartItems);
    }

    /**
     * Get the cart items
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addItem(Request $request) {
        try {
            $cart = Cart::where('user_id', $request->user()->id)->first();
            $product = Product::findOrFail($request->product_id);
            $cartItem = new CartItem($request->all());
            $cartItem->product()->associate($product);
            $cartItem->cart()->associate($cart)->save();
        }
        catch(ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Cart or product not found.',
                'detail' => $e->getMessage()
            ], 404);
        }
        return new CartItemResource($cartItem);
    }

    /**
     * Get the cart items
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function clearCart(Request $request) {
        try {
            $user = User::findOrFail($request->user()->id);
            $cart = Cart::where("user_id", $user->id)->first();
            $cart->cartItems()->delete();
        }
        catch(ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Cart not found.',
                'detail' => $e->getMessage()
            ], 404);
        }
        return response()->json(null, 204);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
