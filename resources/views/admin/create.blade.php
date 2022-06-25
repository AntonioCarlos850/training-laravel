@extends('layouts.admin')

@section('content')
    <h1 class="text-white">Criar Produto</h1>
    <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
        <label for="value">Valor</label>
        <input type="number" name="value" id="value">
        <label for="description">Descrição</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <input type="file" name="image" id="image">
        <button type="submit">Enviar</button>
    </form>
@endsection