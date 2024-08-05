@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Name</label>
        <input type="text" name="name">
        <label>Description</label>
        <textarea name="description"></textarea>
        <label>Price</label>
        <input type="text" name="price">
        <label>Image</label>
        <input type="file" name="image">
        <button type="submit">Create</button>
    </form>
@endsection
