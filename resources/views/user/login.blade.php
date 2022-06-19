@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
@endpush

@section('content')
    <main class="row center">
        <form 
            action="{{route('login')}}" 
            method="POST" 
            id="register" 
            class="col-dt-4 col-mb-8 row direction-column p-2"
        >
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{old('email')}}">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit" id="submit" class="principal-button">Registrar</button>
            <x-handling />
        </form>
    </main>
@endsection