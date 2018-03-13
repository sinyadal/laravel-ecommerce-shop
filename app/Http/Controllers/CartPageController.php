<?php

namespace App\Http\Controllers;

use Session;
use Cart;
use App\Product;
use Illuminate\Http\Request;

class CartPageController extends Controller
{
    public function index()
    {
        $suggested_products = Product::productSuggestion()->get();
        return view('cart', compact('suggested_products')); 
    }

    public function store(Request $request) 
    {
        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
        Session::flash('success', 'Item has been added to your cart!');
        return redirect()->route('cart.index');
        // Cart::add(['id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'options' => ['size' => 'large']]);
    }

    public function destroy($id) 
    {
        Cart::remove($id);
        Session::flash('success', 'Item has been removed from your cart!');        
        return redirect()->route('cart.index');
    }
}
