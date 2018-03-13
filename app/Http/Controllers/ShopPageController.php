<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopPageController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(12)->get();
        return view('shop', compact('products'));
    }
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product', compact('product'));        
    }
}
