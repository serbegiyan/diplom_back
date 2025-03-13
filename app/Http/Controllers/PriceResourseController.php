<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;

class PriceResourseController extends Controller
{

    public function price(Request $request)
    {
        $number = $request->user_identifier;
        $purchases = Basket::where('user_identifier', $number)->get();
        $ides = $purchases->pluck('product_id')->toArray();
        $products_price = Product::all()->whereIn('id', $ides)->sum('price');

        return $products_price;
    }
}
