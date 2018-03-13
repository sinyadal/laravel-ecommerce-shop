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

    public function store($id) 
    {
        $product = Product::find($id);
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
        ])->associate('App\Product');
        Session::flash('success', 'Item has been added to your cart!');
        return redirect()->route('cart.index');
    }

    public function destroy($id) 
    {
        Cart::remove($id);
        Session::flash('success', 'Item has been removed from your cart!');        
        return redirect()->route('cart.index');
    }
}
