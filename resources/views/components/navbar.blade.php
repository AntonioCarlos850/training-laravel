<nav id="navbar" class="row w-100 bg-white center">
    <a href="{{route('index')}}">
        <img src="{{asset('image/logoipsum-logo-9.svg')}}" alt="logipsum">
    </a>
    <form action="{{route('search')}}" method="get">
        <input type="text" name="q" id="q" value="{{request('q') ?? ""}}"><button type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form>
</nav>