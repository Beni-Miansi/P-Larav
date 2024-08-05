@extends('layouts.app')

@section('content')
    <h1>Create Service</h1>
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name">
        <label>Description</label>
        <textarea name="description"></textarea>
        <label>Price</label>
        <input type="text" name="price">
        <button type="submit">Create</button>
    </form>
@endsection

