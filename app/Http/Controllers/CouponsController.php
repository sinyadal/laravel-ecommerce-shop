<?php

namespace App\Http\Controllers;

use Cart;
use App\Coupon;
use Session;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    public function store(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon_code)->first();

        if (!$coupon) {
            Session::flash('errors', 'Invalid coupon code, Please try again..');
            return redirect()->back();
        }
        Session::put('coupon', [
            'name' => $coupon->code,
            'discount' => $coupon->discount(Cart::subtotal()),
        ]);
        Session::flash('success', 'Coupon has been applied');
        return redirect()->route('checkout.index');
    }

    public function destroy()
    {
        Session::forget('coupon');
        Session::flash('success', 'Coupon has been removed');
        return redirect()->back();
    }
}
