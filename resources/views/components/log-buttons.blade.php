@guest
    <a href="{{route('register')}}" class="user-buttons">Registrar</a>
    <a href="{{route('login')}}" class="user-buttons">Entrar</a>
@else
    <span id="hello">Olá, {{auth()->user()->name}}</span>
    <a href="{{route('logout')}}" class="user-buttons">Sair</a>
@endguest