<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;

class CountResourseController extends Controller
{
    public function count(Request $request)

    {
        $number = $request->user_identifier;
        $purchases = Basket::where('user_identifier', $number)->get();
        $ides = $purchases->pluck('product_id')->toArray();
        $products_count = Product::all()->whereIn('id', $ides)->count();

        return $products_count;
    }
}
