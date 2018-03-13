@extends('layouts.app') 

@section('title', 'Shop')

@section('content')
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
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-header bg-white">Category</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card mb-3">
                <div class="card-header bg-white">Shop</div>
                <div class="card-body">
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
                                    <a href="{{ route('shop.show', $product->slug) }}" class="btn btn-warning text-white btn-sm">Buy!</a>
                                    <a href="#" class="btn btn-info btn-sm float-right disabled">{{ $loop->iteration }}/{{ $loop->count }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection