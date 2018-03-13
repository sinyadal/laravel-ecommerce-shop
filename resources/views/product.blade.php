@extends('layouts.app') @section('title', $single_product->name) @section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white border">
            <li class="breadcrumb-item">
                <a href="{{ route('home.index') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('shop.index') }}">Shop</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Laptop 1</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('img/products/' . $single_product->slug . '.jpg') }}" alt="" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h1 class="mb-4">{{ $single_product->name }}</h1>
                    <p class="lead">{{ $single_product->details }}</p>
                    <h2 class="mb-3">{{ $single_product->presentPrice() }}</h2>
                    <p>{{ $single_product->description }}</p>
                    {{--  <a href="" class="btn btn-outline-warning btn-lg">Add to Cart!</a>  --}}
                    <form action="{{ route('cart.store', $single_product->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-warning btn-lg">Add to Cart!</button>
                    </form>
                </div>
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