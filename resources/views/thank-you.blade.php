@extends('layouts.app') @section('title', 'Home') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Thank you for your purchase!</h1>

    </div>
    <div class="row justify-content-center">
        <a href="{{ route('shop.index') }}" class="btn btn-warning text-white">Go to Shop!</a>
    </div>
</div>
@endsection