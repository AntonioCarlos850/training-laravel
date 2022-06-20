<h3 class="m-1">Participe também, comente sobre o produto</h3>
<x-handling />
<form action="{{route('create-comment',$product->slug)}}" method="POST" class="row direction-column mx-1 col-dt-5 col-mb-8">
    @csrf
    <label for="title">Título</label>
    <input type="text" name="title" id="title" placeholder="Título">
    <textarea name="body" id="body" cols="30" rows="5" placeholder="Mensagem"></textarea>
    <button type="submit" class="principal-button" id="send-comment">Enviar</button>
</form>