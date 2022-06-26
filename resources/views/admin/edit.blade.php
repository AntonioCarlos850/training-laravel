@extends('layouts.admin')

@push('styles')
    <link rel="stylesheet" href="{{asset('css/admin-form.css')}}">
@endpush

@section('content')
    <h1 class="text-white">Editar Produto</h1>
    <main class="row center">
        <form 
            action="{{route('admin.update',$product->id)}}" 
            method="POST" 
            enctype="multipart/form-data"
            class="col-dt-6 col-mb-10 row direction-column p-1"
        >
            @csrf
            @method("PATCH")
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" required value="{{$product->name ?? old('name')}}">
            <label for="value">Valor</label>
            <input type="number" name="value" id="value" required value="{{$product->value ?? old('value')}}" min="0">
            <label for="value">Categoria</label>
            <select name="category" id="category" required>
                <optgroup label="Categoria">
                    <option disabled selected value="">Selecione uma categoria</option>
                    @foreach ($categories as $category)
                        <option 
                            value="{{$category->id}}"
                            {{$product->category_id == $category->id || old("category") == $category->id ? "selected" : ""}}
                        >{{$category->name}}</option>
                    @endforeach
                </optgroup>
            </select>
            <label for="description">Descrição</label>
            <textarea name="description" id="description" cols="30" rows="10" required>{{$product->description ?? old('description')}}</textarea>
            <img src="{{asset($product->image)}}" width="100px">
            <label for="image" id="image-label">Alterar Imagem</label>
            <input type="file" name="image" id="image" value="{{old('image')}}">
            <x-handling />
            <button type="submit" class="principal-button">Enviar</button>
        </form>
    </main>
@endsection