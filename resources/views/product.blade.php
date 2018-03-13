@extends('layouts.app') 

@section('title', $product->name) 

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-white border">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Product</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Laptop 1</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-6">
            <img src="https://goo.gl/Csqikm" alt="" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h1 class="mb-4">{{ $product->name }}</h1>
                    <p class="lead">{{ $product->details }}</p>
                    <h2 class="mb-3">{{ $product->presentPrice() }}</h2>
                    <p>{{ $product->description }}</p>
                    <a href="" class="btn btn-outline-info btn-lg">Buy now!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection