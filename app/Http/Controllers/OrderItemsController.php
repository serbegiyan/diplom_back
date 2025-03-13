<?php

namespace App\Http\Controllers;

use App\Models\OrderItems;
use Illuminate\Http\Request;

class OrderItemsController extends Controller
{

    public function show(OrderItems $orderItems)
    {

        return $orderItems;
    }
    public function edit(OrderItems $orderItems)
    {
        return view('order_items.edit', compact('orderItems'));
    }

    public function update(Request $request, OrderItems $orderItems)
    {
        $order_id = $request->get('order_id');
        $product_id = $request->get('product_id');
        $product_name = $request->get('product_name');
        $product_price = $request->get('product_price');
        $count = $request->get('count');
        $size = $request->get('size');
        $total_product_price = $product_price * $count;
        $item = OrderItems::where('order_id', '=', $order_id)->where('product_id', $product_id)->get();
        //dd($item);
        $item->update([
            'order_id' => $order_id,
            'product_id' => $product_id,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'count' => $count,
            'size' => $size,
            'total_product_price' => $total_product_price]);
        return redirect('order.show', $order_id);
    }
}
