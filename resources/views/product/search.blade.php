@extends('layouts.app')

@push('name')
    Search
@endpush

@push('styles')
    <link rel="stylesheet" href="{{asset('/css/home.css') }}">
    <link rel="stylesheet" href="{{asset('/css/components/card.css')}}">
    <link rel="stylesheet" href="{{asset('/css/components/pagination.css')}}">
@endpush

@section('content')
    <section class="row w-100 p-2 space-evenly">
        <h2 class="col-9">Search</h2>
        @foreach ($products as $product)
            <x-card :image="$product->image" :slug="$product->slug" :value="$product->value">
                {{$product->name}}
            </x-card>
        @endforeach
        {{ $products->links() }}
    </section>
@endsection