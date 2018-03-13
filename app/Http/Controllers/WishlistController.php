<?php

namespace App\Http\Controllers;

use Cart;
use Session;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function destroy($id)
    {
        Cart::instance('wishlist')->remove($id);
        Session::flash('success', 'Item has been removed from your wishlist!');        
        return redirect()->route('cart.index');
    }

    public function cart($id)
    {
        $old_wishlist_item = Cart::instance('wishlist')->get($id);
        Cart::instance('wishlist')->remove($id);
        // Prevent duplicate in cart
        $existing_cart_item = Cart::instance('default')->search(function ($wishlist_item) use ($old_wishlist_item) {
            return $wishlist_item->id === $old_wishlist_item->id;
        });
        if ($existing_cart_item->isNotEmpty()) {
            Session::flash('success', 'Item is already added to your cart..');
            return redirect()->route('cart.index');
        }
        Cart::instance('default')->add([
            'id' => $old_wishlist_item->id,
            'name' => $old_wishlist_item->name,
            'qty' => 1,
            'price' => $old_wishlist_item->price,
        ])->associate('App\Product');
        Session::flash('success', 'Item has been added moved to cart!');
        return redirect()->route('cart.index');
    }
}
