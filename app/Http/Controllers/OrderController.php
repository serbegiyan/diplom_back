<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Image;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('order.index', compact('orders'));
    }

    public function create()
    {
        return view('order.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Order $order)
    {
        $id = $order->id;
        $order_items = OrderItems::all()->where('order_id', $id);
        return view('order.show', compact('order', 'order_items'));

    }

    public function edit(Order $order)
    {
        $id = $order->id;
        $order_items = OrderItems::all()->where('order_id', $id);
        return view('order.edit', compact('order', 'order_items'));
    }

    public function update(Request $request, Order $order)
    {
        Order::find($order->id)->update($request->all());
        return redirect()->route('order.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index');
    }

    public function make(Request $request)
    {
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;
        $ides = $request->id;
        $sizes = $request->size;
        $counts = $request->count;
        $products = Product::all()->whereIn('id', $ides);
        $images = Image::all()->whereIn('id', $ides);
        $total_price = 0;
        $results = [];

        foreach ($products as $product) {
            $num = $product->id;
            $results[$num]['product_name'] = $product->name;
            $results[$num]['product_price'] = $product->price;
            $results[$num]['product_id'] = $product->id;
        }
        for ($i = 0; $i < count($products); $i++) {
            $num = $ides[$i];
            $results[$num]['count'] = $counts[$i];
            $results[$num]['size'] = $sizes[$i];
            $total_price += $results[$num]['product_price'] * $results[$num]['count'];
        }
        $order = Order::create([
            'name' => $name,
            'address' => $address,
            'phone' => $phone,
            'total_price' => round($total_price, 2),
        ]);
        foreach ($images as $image) {
            $num = $image->product_id;
            $results[$num]['product_preview'] = $image->main_img_path;
        }
        foreach ($results as $result){
            OrderItems::create([
                'order_id' => $order->id,
                'product_id' => $result['product_id'],
                'product_preview' => $result['product_preview'],
                'product_name' => $result['product_name'],
                'product_price' => $result['product_price'],
                'count' => $result['count'],
                'size' => $result['size'],
                'total_product_price' => $result['product_price'] * $result['count'],
            ]);
        }
        $number = $request->user_identifier;
        $products = Basket::where('user_identifier', $number)->get();
        foreach ($products as $product) {
            $product->delete();
        }
    }
}
