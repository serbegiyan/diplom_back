<?php

namespace App\Http\Controllers;

use App\Http\Requests\Basket\StoreRequest;
use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index()
    {
        $baskets = Basket::all();
        return view('basket.index', compact('baskets'));
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Basket::firstOrCreate($data);
    }
}
