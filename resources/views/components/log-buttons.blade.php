@guest
    <a href="{{route('register')}}">Registrar</a>
    <a href="{{route('login')}}">Entrar</a>
@else
    <span>Olá, {{auth()->user()->name}}</span>
    <a href="{{route('logout')}}">Sair</a>
@endguest