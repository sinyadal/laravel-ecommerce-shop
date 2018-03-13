<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartPageController extends Controller
{
    public function index()
    {
        $suggested_products = Product::productSuggestion()->get();
        return view('cart', compact('suggested_products')); 
    }
}
