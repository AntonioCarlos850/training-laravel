<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('/css/components/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('/css/components/footer.css')}}">
    <link rel="stylesheet" href="{{asset('/css/components/handling.css')}}">
    @stack('styles')
    @stack('script')
    <title>E-commerce | @stack('name')</title>
</head>
<body>
    <x-navbar />
    <div id="content">
        @yield('content')
    </div>
    <x-footer />
</body>
</html>