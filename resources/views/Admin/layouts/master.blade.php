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
    @include('admin.layouts.header')
    @include('admin.layouts.navbar')
    <div class="container">
            @yield('content')
            @include('admin.layouts.footer')
        </div>
    </div>
</body>
</html>