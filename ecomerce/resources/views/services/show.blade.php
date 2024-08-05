@extends('layouts.app')

@section('content')
    <h1>{{ $service->name }}</h1>
    <p>{{ $service->description }}</p>
    <p>{{ $service->price }}</p>
@endsection
