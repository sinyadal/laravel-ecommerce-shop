<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutPageController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function thankYou()
    {
        return view('thank-you');
    }
}
