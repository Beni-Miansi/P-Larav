@extends('layouts.app')

@section('content')
    <h1>Edit Service</h1>
    <form action="{{ route('services.update', $service) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name</label>
        <input type="text" name="name" value="{{ $service->name }}">
        <label>Description</label>
        <textarea name="description">{{ $service->description }}</textarea>
        <label>Price</label>
        <input type="text" name="price" value="{{ $service->price }}">
        <button type="submit">Update</button>
    </form>
@endsection
