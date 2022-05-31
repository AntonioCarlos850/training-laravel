@extends('layouts.app')

@section('content')
    <h1>{{$category->name}}</h1>

    @foreach ($category->products as $product)
        <h2>{{$product->name}}</h2>
    @endforeach
@endsection