<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductResourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::filter($request->all())->get();

        foreach ($products as $product) {
            $product['preview'] = $product->image->second_img;
            $product['hover'] = $product->image->main_img;
        }
        return $products;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product['main_img'] = $product->image->main_img;
        $product['second_img'] = $product->image->second_img;
        $product['third_img'] = $product->image->third_img;
        $product['fourth_img'] = $product->image->fourth_img;
        $product['model_img'] = $product->image->model_img;
        $product['XS'] = $product->size->XS;
        $product['S'] = $product->size->S;
        $product['M'] = $product->size->M;
        $product['L'] = $product->size->L;
        $product['XL'] = $product->size->XL;
        $product['cotton'] = $product->composition->cotton;
        $product['wool'] = $product->composition->wool;
        $product['viscose'] = $product->composition->viscose;
        $product['elastane'] = $product->composition->elastane;
        $product['polyester'] = $product->composition->polyester;

        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function men(Request $request)
    {
        $products = Product::where('gender', 'мужской')->get();
        foreach ($products as $product) {
            $product['vitrina'] = $product->image->main_img;
            $product['model'] = $product->image->model_img;
        }
        return $products;
    }
    public function women()
    {
        $products = Product::where('gender', 'женский')->get();
        foreach ($products as $product) {
            $product['vitrina'] = $product->image->main_img;
            $product['model'] = $product->image->model_img;
        }
        return $products;
    }
    public function men_catalog(Request $request)
    {
        $products = Product::filter($request->all())->where('gender', 'мужской')->get();
        foreach ($products as $product) {
            $product['preview'] = $product->image->second_img;
            $product['hover'] = $product->image->main_img;
        }
        return $products;
    }
    public function women_catalog(Request $request)
    {
        $products = Product::filter($request->all())->where('gender', 'женский')->get();
        foreach ($products as $product) {
            $product['preview'] = $product->image->second_img;
            $product['hover'] = $product->image->main_img;
        }
        return $products;
    }
}
