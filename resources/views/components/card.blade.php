<article class="col-dt-3 col-mb-5 card p-2"></article>
    <a class="content row center row direction-column space-evenly" href="{{route('product',$slug)}}">
        <img src={{$image}} alt="nike show">
        <h3>{{$slot}}</h3>
        <div class="row space-between data col-10">
            <span>{{$value}}</span>
            <button>Comprar</button>
        </div>
    </a>
</article>