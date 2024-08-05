@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label>Name</label>
        <input type="text" name="name" value="{{ $product->name }}">
        <label>Description</label>
        <textarea name="description">{{ $product->description }}</textarea>
        <label>Price</label>
        <input type="text" name="price" value="{{ $product->price }}">
        <label>Image</label>
        <input type="file" name="image">
        <button type="submit">Update</button>
    </form>
@endsection
