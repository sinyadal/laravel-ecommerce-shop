@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
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

        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-white">Shop</div>
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