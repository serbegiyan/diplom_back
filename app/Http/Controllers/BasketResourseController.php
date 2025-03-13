<?php

namespace App\Http\Controllers;

use App\Http\Requests\Basket\StoreRequest;
use App\Models\Basket;
use App\Models\Image;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class BasketResourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $number = $request->user_identifier;
        $purchases = Basket::where('user_identifier', $number)->get();
        $ides = $purchases->pluck('product_id')->toArray();
        $sizes = Size::all()->whereIn('id', $ides);
        $products = Product::all()->whereIn('id', $ides);
        $images = Image::all()->whereIn('id', $ides);
        $result = [];
        foreach ($products as $product) {
            $num = $product->id;
            $result[$num]['id'] = $product->id;
            $result[$num]['name'] = $product->name;
            $result[$num]['price'] = $product->price;
            $result[$num]['article'] = $product->article;
        }
        foreach ($images as $image) {
            $num = $image->product_id;
            $result[$num]['img'] = $image->main_img;
        }
        foreach ($sizes as $size) {
            $num = $size->product_id;
            $result[$num]['S'] = $size->S;
            $result[$num]['XS'] = $size->XS;
            $result[$num]['M'] = $size->M;
            $result[$num]['L'] = $size->L;
            $result[$num]['XL'] = $size->XL;
        }
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function make(Request $request)
    {
        $product_id = $request->product_id;
        $user_identifier = $request->user_identifier;
        Basket::create([
            'user_identifier' => $user_identifier,
            'product_id' => $product_id,
        ]);
    }

    public function delete(Request $request)
    {
        $number = $request->user_identifier;
        $id = $request->id;
        $product = Basket::where('user_identifier', $number)->where('product_id', $id)->first();
        $product->delete();
    }
}
