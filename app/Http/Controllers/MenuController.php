<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MenuController extends Controller
{
    public function index($category = 'drink')
    {
        $products = Product::where('category', $category)->get();

        return view('menu', compact('products', 'category'));
    }
}
