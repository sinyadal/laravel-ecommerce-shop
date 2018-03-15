<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopPageController extends Controller
{
    public function index()
    {
        if (request()->category) { // If request has $category->slug passed, filter the query..
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            })->get();
            $categories = Category::all();
            $category_name = $categories->where('slug', request()->category)->first()->name;
        } else { // Just normal behavior
            $products = Product::inRandomOrder()->take(8)->get();
            $categories = Category::all();
            $category_name = 'Featured';
        }

        if (request()->price_sort == 'low_high') { // If request has $category->slug passed, filter the query..
            $products = $products->sortBy('price');
        } elseif (request()->price_sort == 'high_low') {
            $products = $products->sortByDesc('price');
        }
        
        return view('shop', compact('products', 'categories', 'category_name'));
    }
    public function show($slug)
    {
        $single_product = Product::where('slug', $slug)->firstOrFail();
        $suggested_products = Product::where('slug', '!=', $slug)->productSuggestion()->get();
        return view('product', compact('single_product', 'suggested_products'));        
    }
}
