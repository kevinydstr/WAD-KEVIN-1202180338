@extends('base')

@section('title', 'List Order')

@section('content')
@if ($products->isEmpty())
<div class="row justify-content-center">
    <p>There is no data...</p>
</div>
<div class="row justify-content-center">
    <a class="btn btn-dark" href="{{ route('addProduct') }}" role="button">Add Product</a>
</div>
@else
<div class="text-center">
    <h3>Order</h3>
</div>
<div class="row justify-content-center">
    @foreach ($products as $product)
    <div class="col">
        <div class="card mx-auto" style="width: 18rem;">
            <img src="{{ asset('storage/' . explode('/', $product->img_path)[1]) }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <h5>${{ $product->id }}</h5>
                <a href="{{ route('processOrder', $product->id) }}" class="btn btn-success">Order Now</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
@endsection
