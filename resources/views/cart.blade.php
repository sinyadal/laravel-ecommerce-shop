@extends('layouts.app') @section('title', 'Cart') @section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white border">
            <li class="breadcrumb-item">
                <a href="{{ route('home.index') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('cart.index') }}">Shopping Cart</a>
            </li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-9">
            <div class="mt-5">
                <h2 class="mb-5">3 items in Shopping Cart</h2>
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="w-25"><img class="img-fluid" src="https://goo.gl/Csqikm" alt=""></td>
                            <td>Otto</td>
                            <td> </td>
                            <td>
                                <select class="custom-select" id="inlineFormCustomSelect">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                            <td><h5>$2031.99</h5></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td class="w-25"><img class="img-fluid" src="https://goo.gl/Csqikm" alt=""></td>
                            <td>Thornton</td>
                            <td>Mekbuk Pro</td>
                            <td>
                                <select class="custom-select" id="inlineFormCustomSelect">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                            <td><h5>$2031.99</h5></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td class="w-25"><img class="img-fluid" src="https://goo.gl/Csqikm" alt=""></td>
                            <td>Mekbuk Pro</td>
                            <td>Mekbuk Pro</td>
                            <td>
                                <select class="custom-select" id="inlineFormCustomSelect">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                            <td><h5>$2031.99</h5></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron jumbotron-fluid mt-5 mb-0">
    <div class="container">
        <h4 class="mb-4">You might also like..</h4>
        <div class="row">
            @foreach($suggested_products as $suggested_product)
            <div class="col-md-3">
                <div class="card">
                    <a href="{{ route('shop.show', $suggested_product->slug) }}">
                        <img class="card-img-top" src="{{ asset('img/products/' . $suggested_product->slug . '.jpg') }}" alt="">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $suggested_product->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $suggested_product->presentPrice() }}</h6>
                        <p class="card-text">{{ $suggested_product->details }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection