<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::count();
        $users = User::count();
        $articles = Article::count();
        $orders = Order::count();
        return view('main.index', compact('products', 'users', 'articles', 'orders'));
    }
}
