<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // Tampilkan cart
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    // Tambah ke cart
    public function add($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "qty" => 1
            ];
        }

        session()->put('cart', $cart);

        return back();
    }

    // Update jumlah
    public function update($id, $action)
    {
        $cart = session()->get('cart');

        if($action == 'plus'){
            $cart[$id]['qty']++;
        }

        if($action == 'minus'){
            $cart[$id]['qty']--;
        }

        if($cart[$id]['qty'] <= 0){
            unset($cart[$id]);
        }

        session()->put('cart', $cart);

        return back();
    }

    // Hapus item
    public function remove($id)
    {
        $cart = session()->get('cart');

        unset($cart[$id]);

        session()->put('cart', $cart);

        return back();
    }
}
