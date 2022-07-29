<?php

use App\Http\Controllers\CartItemController;
use App\Http\Controllers\ColourController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use \App\Http\Controllers\CartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Public routes
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::apiResource('products', ProductController::class);
Route::get('products/category/{category}', [ProductController::class, 'showByCategory']);
Route::get('colour', [ColourController::class, 'index']);

//Protected routes (require user authentication)
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('users', [UserController::class, 'getUsers']);
    Route::post('logout', [UserController::class, 'logout']);
    Route::get('cart/cartItems', [CartController::class, 'cartItems']);
    Route::post('cart/addItem', [CartController::class, 'addItem']);
    Route::delete('cart/clearCart', [CartController::class, 'clearCart']);
    Route::apiResource('cart', CartController::class);
    Route::apiResource('cartItem',CartItemController::class);
    Route::put('colour', [ColourController::class, 'update']);
});
