@extends('layouts.app')

@push('name')
    {{$product->name}}
@endpush

@push('styles')
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
    <link rel="stylesheet" href="{{asset('css/components/comment.css')}}">
@endpush

@section('content')
    <section class="row m-2 p-3" id="initial">
        <nav class="col-10">
            <a class="text-white decoration-none left" href="{{route('search',["category"=>$product->category->slug])}}"><h2>{{$product->category->name}}</h2></a>
        </nav>
        <main class="col-dt-6 col-mb-10 center">
            <img src="{{asset($product->image)}}" alt="" class="my-2">
        </main>
        <aside class="col-dt-4 col-mb-10">
            <span id="category">{{$product->category->name}}</span>
            <h1>{{$product->name}}</h1>
            <span id="value">$ {{$product->value}}</span>
            <a href="#" class="decoration-none"><button id="buy">Ver Agora</button></a>
        </aside>
        <article id="description" class="col-10 my-2 p-1 text-white">
            <h2 class="mb-1">Descrição</h2>
            <p>
                {{$product->description}}
            </p>
        </article>
        <article id="comments" class="col-10 p-1 text-white">
            <h2>Comentários</h2>
            @auth
                <div class="col-10 row direction-column center">
                    @include('comment._create-form')
                </div>
            @endauth
            @if ($product->comments->count())
                <section class="row col-10 space-around">
                    @foreach ($product->comments as $comment)
                        <x-comment :comment="$comment" />
                    @endforeach
                </section>
            @else
                <h4>Nenhum comentário sobre esse produto até o momento...</h4>
            @endif
        </article>
    </section>
@endsection