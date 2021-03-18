<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('page-style')
</head>
<body>
    @include('layouts.header')
    @include('layouts.navbar')
    <div class="container">
        <div class="d-flex">
            <div>
                @include('layouts.sidebarTop')
                @include('layouts.sidebarBottom')
            </div>
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>