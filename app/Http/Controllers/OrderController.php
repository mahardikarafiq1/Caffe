<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
        $cart = session('cart');

        if(!$cart){
            return back();
        }

        $total = 0;

        foreach($cart as $item){
            $total += $item['price'] * $item['qty'];
        }

        $order = Order::create([
            'user_id' => auth()->id(),
            'total' => $total,
            'payment_method' => $request->payment
        ]);

        foreach($cart as $product_id => $item){
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $product_id,
                'qty' => $item['qty'],
                'price' => $item['price']
            ]);
        }

        session()->forget('cart');

        return redirect('/invoice/'.$order->id);
    }

    public function invoice($id)
    {
        $order = Order::with('items.product')->findOrFail($id);

        return view('invoice', compact('order'));
    }
}
