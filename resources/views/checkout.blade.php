@extends('layouts.app') @section('title', 'Home') @section('content')
<div class="container">
    <div>
        <h1 class="mb-4 mt-3">Checkout</h1>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card mb-4">
                <div class="card-body">
                    <h3>Billing Details</h3>

                    <form>
                        <div class="form-group">
                            <label for="inputPassword4">Name</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="name@domain.com">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                    </form>

                    <hr>
                    <h3 class="mt-3">Payment Details</h3>

                    <form>
                        <div class="form-group">
                            <label for="inputPassword4">Name on Card</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                                <label for="">Card Number</label>
                                <input type="text" class="form-control" id="" placeholder="name@domain.com">
                            </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Expiry</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputZip">CVC Code</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <button class="btn btn-success btn-lg btn-block mt-3">Complete Order</button>
                    </form>


                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card mb-4">
                <div class="card-body">
                    <h4>Your Order</h4>

                    <table class="table">
                        <tbody>
                            @foreach(Cart::content() as $cart_item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td class="w-25">
                                    <a href="{{ route('shop.show', $cart_item->model->slug) }}">
                                        <img class="img-fluid" src="{{ asset('img/products/' . $cart_item->model->slug . '.jpg') }}" alt="">
                                    </a>
                                </td>
                                <td>{{ $cart_item->model->name }}
                                    <br> {{ $cart_item->model->presentPrice() }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="card card-body bg-primary text-white">
                        @php
                        function presentPrice($price){
                            // Format $price to ms_my currency
                            setlocale(LC_MONETARY, 'ms_MY');
                            return money_format('%i', $price) . "\n";
                        }
                        @endphp
                        <p>Subtotal:
                            <span class="float-right"> {{ presentPrice(Cart::subtotal()) }}</span>
                        </p>
                        <p>Tax: (6%)
                            <span class="float-right"> {{ presentPrice(Cart::tax()) }}</span>
                        </p>
                        <p class="font-weight-bold lead mb-0">Total:
                            <span class="float-right"> {{ presentPrice(Cart::total()) }}</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection