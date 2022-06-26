@extends('layouts.admin')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/admin-form.css')}}">
@endpush

@section('content')
    <h1 class="text-white">Criar Produto</h1>
    <main class="row center">
        <form 
            action="{{route('admin.store')}}" 
            method="POST" 
            enctype="multipart/form-data"
            class="col-dt-6 col-mb-10 row direction-column p-1"
        >
            @csrf
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" required value="{{old('name')}}">
            <label for="value">Valor</label>
            <input type="number" name="value" id="value" required value="{{old('value')}}" min="0">
            <label for="value">Categoria</label>
            <select name="category" id="category" required>
                <optgroup label="Categoria">
                    <option disabled selected value="">Selecione uma categoria</option>
                    @foreach ($categories as $category)
                        <option 
                            value="{{$category->id}}"
                            {{old("category") == $category->id ? "selected" : ""}}
                        >{{$category->name}}</option>
                    @endforeach
                </optgroup>
            </select>
            <label for="description">Descrição</label>
            <textarea name="description" id="description" cols="30" rows="10" required>{{old('description')}}</textarea>
            <label for="image" id="image-label">Adicionar Imagem</label>
            <input type="file" name="image" id="image" value="{{old('image')}}">
            <x-handling />
            <button type="submit" class="principal-button">Enviar</button>
        </form>
    </main>
@endsection