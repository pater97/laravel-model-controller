<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;1,600;1,900&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,200;0,300;0,500;0,800;0,900;1,600;1,700&display=swap" rel="stylesheet">
    <title>@yield('title','PATER MOVIES')</title>
</head>
<body>
    {{-- header  --}}
    @include('partials.header')
    {{-- main --}}
    <section>
        @yield('content')
    </section>
    {{-- footer --}}
    @include('partials.footer')
</body>
</html>