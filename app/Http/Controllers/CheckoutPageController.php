<?php

namespace App\Http\Controllers;

use Cart;
use Session;
use Illuminate\Http\Request;

class CheckoutPageController extends Controller
{
    private function getNumbers()
    {
        // Calculations occur here
        $tax = config('cart.tax') / 100;
        $discount = Session::get('coupon')['discount'] ?? 0;
        $new_subtotal = (Cart::subtotal() - $discount);
        $new_tax = $new_subtotal * $tax;
        $new_total = $new_subtotal + $new_tax;
        // This will cause rounding issues, go to Coupon.php discount() method to see solution
        return collect([
            'tax' => $tax,
            'discount' => $discount,
            'new_subtotal' => $new_subtotal,
            'new_tax' => $new_tax,
            'new_total' => $new_total,
        ]);
    }

    public function index()
    {
        return view('checkout')->with([
            'discount' => $this->getNumbers()->get('discount'),
            'new_subtotal' => $this->getNumbers()->get('new_subtotal'),
            'new_tax' => $this->getNumbers()->get('new_tax'),
            'new_total' => $this->getNumbers()->get('new_total'),
        ]);
    }

    public function thankYou()
    {
        return view('thank-you');
    }
}
