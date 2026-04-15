<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PageController extends Controller
{
    public function landing()
    {
        return view('pages.landing');
    }

    public function menu($category = 'drink')
    {
        $products = Product::where('category', $category)->get();
        return view('pages.menu', compact('products', 'category'));
    }
}
