<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopPageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // Category filtering
        if (request()->category) { // If request has $category->slug passed, filter the query..
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            });
            $category_name = optional($categories->where('slug', request()->category)->first())->name;
        } else { // Just normal behavior
            $products = Product::where('featured', true);
            $category_name = 'Featured';
        }
        // Price sorting
        if (request()->price_sort == 'low_high') { // If request has $category->slug passed, filter the query..
            $products = $products->orderBy('price')->paginate(6);
        } elseif (request()->price_sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate(6);
        } else {
            $products = $products->paginate(6);
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
