@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white">Homepage</div>
                <div class="card-body">

                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="https://goo.gl/Csqikm" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $product->presentPrice() }}</h6>
                                    <p class="card-text">{{ $product->details }}
                                    </p>
                                    <a href="#" class="card-link">Buy!</a>
                                    <a href="#" class="card-link float-right">{{ $loop->iteration }}/{{ $loop->count }}</a>
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