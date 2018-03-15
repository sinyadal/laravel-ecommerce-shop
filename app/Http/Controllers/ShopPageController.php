<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopPageController extends Controller
{
    public function index()
    {
        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            })->get();
            $categories = Category::all();
        }
        else {
            $products = Product::inRandomOrder()->take(8)->get();
            $categories = Category::all();
        }
        
        return view('shop', compact('products', 'categories'));
    }
    public function show($slug)
    {
        $single_product = Product::where('slug', $slug)->firstOrFail();
        $suggested_products = Product::where('slug', '!=', $slug)->productSuggestion()->get();
        return view('product', compact('single_product', 'suggested_products'));        
    }
}
