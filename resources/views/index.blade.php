@extends('layouts.app')

@push('name')
    Home
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <link rel="stylesheet" href="{{asset('/css/components/card.css')}}">
@endpush

@section('content')
    <section class="row w-100 bg-white">
        <article class="col-10 p-0 row" id="principal-card">
            <div class="col-5 row center">
                <img id="principal-image" src="https://www.pngmart.com/files/1/Nike-Shoes-Transparent-PNG.png"
                alt="nike shoes">
            </div>
            <div class="col-5 row center">
                <h1 class="col-7">Para quem deseja <br><i>mais do que um tênis</i></h1>
                <p class="col-7">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Maecenas in augue ac augue blandit aliquet ac a sem.<br>
                    Sed iaculis metus odio, nec iaculis enim viverra eu.
                </p><br>
                <div class="col-7 left">
                    <button id="buy-now">Compre agora <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
        </article>
    </section>
    <section class="row w-100 p-2 space-evenly">
        <h2 class="col-9">Novos lançamentos</h2>
        @foreach ($products as $product)
            <x-card :image="$product->image" :slug="$product->slug" :value="$product->value">
                {{$product->name}}
            </x-card>
        @endforeach
    </section>
@endsection
