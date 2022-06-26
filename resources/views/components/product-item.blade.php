@props(["product"])

<li class="product-item row w-100 text-white space-between">
    <h2 class="row left"><a class="text-white" href="{{route('product',$product->slug)}}" target="_blank">{{$product->name}}</a></h2>
    <div>
        <a href="{{route('admin.edit',$product->id)}}" class="edit">
            <i class="fa-solid fa-pen"></i>
        </a>
        <form action="{{route('admin.destroy',$product->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="delete">
                <i class="fa-solid fa-trash"></i>
            </button>
        </form>
    </div>
</li>