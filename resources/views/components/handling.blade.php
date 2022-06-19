@if ($errors->any())
    <ul class="my-1">
        @foreach($errors->all() as $error)
            <li class="error-msg">{{$error}}</span>
        @endforeach
    </ul>
@endif
@if (session('success'))
    <div class="row w-100 center bg-white">
        <span class="success-msg">{{session('success')}}</span>
    </div>
@endif