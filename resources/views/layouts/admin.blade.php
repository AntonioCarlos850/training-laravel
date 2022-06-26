<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('/css/components/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('/css/components/footer.css')}}">
    <link rel="stylesheet" href="{{asset('/css/components/handling.css')}}">
    <link rel="stylesheet" href="{{asset('/css/admin.css')}}">
    @stack('styles')
    @stack('script')
    <title>E-commerce | @stack('name')</title>
</head>
<body class="row">
    <x-sidebar class="col-2" id="sidebar"></x-sidebar>
    <div id="content" class="col-8 p-1">
        @yield('content')
    </div>
</body>
</html>