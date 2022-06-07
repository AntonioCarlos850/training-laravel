@extends('layouts.app')

@push('name')
    {{$product->name}}
@endpush

@push('styles')
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
@endpush

@section('content')
    <section class="row m-2 p-3" id="initial">
        <nav class="col-10">
            <a class="text-white decoration-none left" href="{{route('search',["category"=>$product->category->slug])}}"><h2>{{$product->category->name}}</h2></a>
        </nav>
        <main class="col-dt-6 col-mb-10 center">
            <img src="{{$product->image}}" alt="" class="my-2">
        </main>
        <aside class="col-dt-4 col-mb-10">
            <span id="category">{{$product->category->name}}</span>
            <h1>{{$product->name}}</h1>
            <span id="value">$ {{$product->value}}</span>
            <button id="buy">Comprar Agora</button>
        </aside>
    </section>
@endsection