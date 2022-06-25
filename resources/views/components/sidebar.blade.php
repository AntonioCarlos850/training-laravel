<aside {{$attributes}}>
    <nav class="row direction-column p-1">
        <a href="{{route('index')}}">
            <img src="{{asset('image/logoipsum-logo-9.svg')}}" alt="logipsum">
        </a>
        <ul class="row left direction-column w-100 p-0">
            <li class="my-1 w-100">
                <a href="{{route('admin.index')}}" 
                    class="decoration-none w-100 {{request()->is('admin') ? 'link-2' : 'link-1'}}"
                >Dashboard</a>
            </li>
            <li class="my-1 w-100">
                <a href="{{route('admin.create')}}" 
                    class="decoration-none w-100 {{request()->is('admin/create') ? 'link-2' : 'link-1'}}"
                >Novo Produto</a>
            </li>
        </ul>
    </nav>
</aside>