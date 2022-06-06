@extends('layouts.app')

@push('name')
    {{$product->name}}
@endpush

@push('styles')
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
@endpush

@section('content')
    <section class="row w-100">
        <main class="col-dt-6 col-mb-10">
            <a href="{{route('search',["category"=>$product->category->slug])}}"><h2>{{$product->category->name}}</h2></a>
            <img src="{{$product->image}}" alt="" width="250">
        </main>
        <aside class="col-dt-4 col-mb-10">
            <span>{{$product->category->name}}</span>
            <h1>{{$product->name}}</h1>
            <span>$ {{$product->value}}</span>
        </aside>
    </section>
@endsection