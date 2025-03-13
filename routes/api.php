<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products/men', [\App\Http\Controllers\ProductResourseController::class, 'men']);
Route::get('/products/women', [\App\Http\Controllers\ProductResourseController::class, 'women']);
Route::get('/products/men_catalog', [\App\Http\Controllers\ProductResourseController::class, 'men_catalog']);
Route::get('/products/women_catalog', [\App\Http\Controllers\ProductResourseController::class, 'women_catalog']);
Route::resource('products', \App\Http\Controllers\ProductResourseController::class);
Route::get('baskets/make', [\App\Http\Controllers\BasketResourseController::class, 'make']);
Route::get('baskets/delete', [\App\Http\Controllers\BasketResourseController::class, 'delete']);
Route::get('count', [\App\Http\Controllers\CountResourseController::class, 'count']);
Route::get('price', [\App\Http\Controllers\PriceResourseController::class, 'price']);
Route::resource('baskets', \App\Http\Controllers\BasketResourseController::class);
Route::get('orders/make', [\App\Http\Controllers\OrderController::class, 'make']);


