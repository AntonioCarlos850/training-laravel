@extends('layouts.app')

@section('content')
    <h1>{{$product->name}}</h1>
    <a href="{{route('category',$product->category->slug)}}"><h2>{{$product->category->name}}</h2></a>
    <span>{{$product->value}}</span>
    <img src="{{$product->image}}" alt="" width="250">
@endsection