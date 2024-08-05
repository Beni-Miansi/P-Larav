@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>{{ $product->price }}</p>
    @if ($product->image)
        <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}">
    @endif
@endsection
