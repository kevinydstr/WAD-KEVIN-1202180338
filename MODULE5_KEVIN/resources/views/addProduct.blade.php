@extends('base')

@section('title', 'Add Product')

@section('content')
<div class="text-center">
    <h3>Input Product</h3>
</div>
<div class="row justify-content-center">
    <form method="POST" action="{{ route('addProductPost') }}" class="w-75" enctype="multipart/form-data">
        @csrf    
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">$ USD</div>
                </div>
                <input type="number" class="form-control" id="price" name="price">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group w-25">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock">
        </div>
        <div class="form-group">
            <label for="image">Image file input</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" name="submit" class="btn btn-dark">Submit</button>
    </form>
</div>
@endsection
