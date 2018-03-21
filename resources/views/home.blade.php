@extends('layouts.app') @section('title', 'Home') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="row">

                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <a href="{{ route('shop.show', $product->slug) }}">
                            <img class="card-img-top" src="{{ asset('img/products/' . $product->slug . '.jpg') }}" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $product->presentPrice() }}</h6>
                            <p class="card-text">{{ $product->details }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <a href="{{ route('shop.index') }}" class="btn btn-warning text-white">Go to Shop!</a>
    </div>
</div>
@endsection