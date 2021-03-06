@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
@endpush

@section('content')
    <main class="row center">
        <form 
            action="{{route('create-user')}}" 
            method="POST" 
            id="register" 
            class="col-dt-4 col-mb-8 row direction-column p-2"
        >
            @csrf
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{old('name')}}">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{old('email')}}">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit" id="submit" class="principal-button">Registrar</button>
            <x-handling />
        </form>
    </main>
@endsection