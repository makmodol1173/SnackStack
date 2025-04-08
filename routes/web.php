<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

// Group routes under 'admin' prefix
// Route::prefix('admin')->middleware(['auth', 'admin'])->group(function() {
//     // Route to display food items
//     Route::get('/food', [AdminController::class, 'index'])->name('admin.food.index');

//     // Route to display the create form for a new food item
//     Route::get('/food/create', [AdminController::class, 'create'])->name('admin.food.create');
    
//     // Route to store a new food item
//     Route::post('/food', [AdminController::class, 'store'])->name('admin.food.store');

//     // Route to edit an existing food item
//     Route::get('/food/{id}/edit', [AdminController::class, 'edit'])->name('admin.food.edit');

//     // Route to update an existing food item
//     Route::put('/food/{id}', [AdminController::class, 'update'])->name('admin.food.update');

//     // Route to delete a food item
//     Route::delete('/food/{id}', [AdminController::class, 'destroy'])->name('admin.food.delete');
// });

Route::get('/', [FoodController::class, 'index']);
Auth::routes();

Route::get('logout', [LoginController::class, 'logout']);

// food routes with policy
Route::get('/updatefood/{food}', [FoodController::class, 'getForUpdate'])->middleware('protected');
Route::get('/home', [FoodController::class, 'index']);
Route::get('/home/{type}', [FoodController::class, 'filter']);
Route::get('/food/viewfood', [FoodController::class, 'adminIndex'])->middleware('protected');
Route::get('/admin', [AdminController::class, 'index']);
Route::view('/food/addfood', 'food.addfood')->middleware('protected');
Route::post('/food/create', [FoodController::class, 'create']);
Route::get('/food/{food}', [FoodController::class, 'show']);
Route::post('/food/{food}', [FoodController::class, 'update']);
Route::delete('/food/{food}', [FoodController::class, 'destroy']);
Route::post('/food/addfood', [FoodController::class, 'create']);
Route::post('/place-order', [OrderController::class, 'store']);


// Order routes
Route::get('order', [OrderController::class, 'show']);
Route::delete('/order/{order_id}', [OrderController::class, 'destroy']);

// Cart routes
Route::view('cart', 'cart');
Route::post('/addToCart', [OrderController::class, 'updateCart']);
Route::delete('/cart/remove/{food_id}', [OrderController::class, 'removeFromCart']);
Route::post('/cart/placeorder', [OrderController::class, 'placeOrder']);

Route::post('/user/edit', [UserController::class, 'update']);
Route::get('/user/edit', [UserController::class, 'updateView']);
Route::delete('/user/{user}', [UserController::class, 'delete']);


