@extends('layouts.app')

@push('name')
    Home
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <link rel="stylesheet" href="{{asset('/css/components/card.css')}}">
@endpush

@section('content')
    @include('_header')
    <section class="row w-100 p-2 space-evenly">
        <h2 class="col-9">Novos lançamentos</h2>
        @foreach ($products as $product)
            <x-card :image="$product->image" :slug="$product->slug" :value="$product->value">
                {{$product->name}}
            </x-card>
        @endforeach
    </section>
@endsection
