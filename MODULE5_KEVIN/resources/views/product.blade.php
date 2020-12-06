@extends('base')

@section('title', 'List Product')

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
    <h3>List Product</h3>
</div>
<div class="row">
    <a class="btn btn-dark" href="{{ route('addProduct') }}" role="button">Add Product</a>
</div>
<div class="row justify-content-center mt-3">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)                
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('updateProduct', $product->id) }}" role="button">Edit</a>
                    <form action="{{ route('deleteProduct') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection
