@extends('layouts.admin')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/components/pagination.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endpush

@section('content')
    <div>
        <h1 class="text-white">Todos os produtos</h1>
        <div class="col-3 my-1">
            <x-handling></x-handling>
        </div>
        <section>
            <ul class="w-100 p-0 m-0">
                @foreach ($products as $product)
                    <x-product-item :product="$product" ></x-product-item>
                @endforeach
            </ul>
            {{$products->links()}}
        </section>
    </div>
@endsection