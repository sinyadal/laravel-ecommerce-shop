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

    public function add($id) 
    {   
        // Present row..
        $product = Product::find($id);
        // Prevent duplicate in cart
        $existing_cart_item = Cart::search(function ($cart_item) use ($product) {
            return $cart_item->id === $product->id;
        });
        if ($existing_cart_item->isNotEmpty()) {
            Session::flash('success', 'Item is already added..');
            return redirect()->route('cart.index');
        }
        // Add new product to cart
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

    public function wishlist($id) 
    {
        $old_cart_item = Cart::get($id);
        Cart::remove($id);
        // Prevent duplicate in cart
        $existing_wishlist_item = Cart::instance('wishlist')->search(function ($wishlist_item) use ($old_cart_item) {
            return $wishlist_item->id === $old_cart_item->id;
        });
        if ($existing_wishlist_item->isNotEmpty()) {
            Session::flash('success', 'Item is already added to your wishlist..');
            return redirect()->route('cart.index');
        }
        Cart::instance('wishlist')->add([
            'id' => $old_cart_item->id,
            'name' => $old_cart_item->name,
            'qty' => 1,
            'price' => $old_cart_item->price,
        ])->associate('App\Product');
        Session::flash('success', 'Item has been added to your wishlist!');
        return redirect()->route('cart.index');
    }

    public function update(Request $request, $id)
    {
        Cart::update($id, $request->quantity);
        Session::flash('success', 'Quantity updated!');
        return response()->json(['success' => true]);
    }
}
