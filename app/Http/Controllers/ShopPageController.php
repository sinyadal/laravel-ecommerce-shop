<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopPageController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(8)->get();
        return view('shop', compact('products'));
    }
    public function show($slug)
    {
        $single_product = Product::where('slug', $slug)->firstOrFail();
        $suggested_products = Product::where('slug', '!=', $slug)->productSuggestion()->get();
        return view('product', compact('single_product', 'suggested_products'));        
    }
}
