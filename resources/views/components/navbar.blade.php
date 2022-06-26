<nav id="navbar" class="row w-100 bg-white center">
    <a href="{{route('index')}}" class="col-dt-2 col-mb-4">
        <img src="{{asset('image/logoipsum-logo-9.svg')}}" alt="logipsum">
    </a>
    <form action="{{route('search')}}" method="get" class="col-dt-4 col-mb-6">
        <input type="text" name="q" id="q" value="{{request('q') ?? ""}}"><button type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form>
    <x-log-buttons />
</nav>