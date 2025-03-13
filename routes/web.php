<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/', [\App\Http\Controllers\Main\IndexController::class, 'index'])->name('main.index');

    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('/', [ProductController::class, 'store'])->name('product.store');
        Route::get('/{product}', [ProductController::class, 'show'])->name('product.show');
        Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::patch('/{product}', [ProductController::class, 'update'])->name('product.update');
        Route::delete('/{product}', [ProductController::class, 'destroy'])->name('product.delete');
    });
    Route::group(['prefix' => 'articles'], function () {
        Route::get('/', [ArticleController::class, 'index'])->name('article.index');
        Route::get('/create', [ArticleController::class, 'create'])->name('article.create');
        Route::post('/', [ArticleController::class, 'store'])->name('article.store');
        Route::get('/{article}', [ArticleController::class, 'show'])->name('article.show');
        Route::get('/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
        Route::patch('/{article}', [ArticleController::class, 'update'])->name('article.update');
        Route::delete('/{article}', [ArticleController::class, 'destroy'])->name('article.delete');
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/', [UserController::class, 'store'])->name('user.store');
        Route::get('/{user}', [UserController::class, 'show'])->name('user.show');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::patch('/{user}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('user.delete');
    });
    Route::group(['prefix' => 'orders'], function () {
        Route::get('/', [OrderController::class, 'index'])->name('order.index');
        Route::get('/create', [OrderController::class, 'create'])->name('order.create');
        Route::post('/', [OrderController::class, 'store'])->name('order.store');
        Route::get('/{order}', [OrderController::class, 'show'])->name('order.show');
        Route::get('/{order}/edit', [OrderController::class, 'edit'])->name('order.edit');
        Route::patch('/{order}', [OrderController::class, 'update'])->name('order.update');
        Route::delete('/{order}', [OrderController::class, 'destroy'])->name('order.delete');
    });
    Route::group(['prefix' => 'order_items'], function () {
        Route::get('/', [OrderItemsController::class, 'index'])->name('order_items.index');
        Route::get('/create', [OrderItemsController::class, 'create'])->name('order_items.create');
        Route::get('/store', [OrderItemsController::class, 'store'])->name('order_items.store');
        Route::get('/{order_items}', [OrderItemsController::class, 'show'])->name('order_items.show');
        Route::get('/{order_items}/edit', [OrderItemsController::class, 'edit'])->name('order_items.edit');
        Route::patch('/{order_items}', [OrderItemsController::class, 'update'])->name('order_items.update');
        Route::delete('/{order_items}', [OrderItemsController::class, 'destroy'])->name('order_items.delete');
    });
});
Route::get('basket/make', [BasketController::class, 'store']);

require __DIR__.'/auth.php';
