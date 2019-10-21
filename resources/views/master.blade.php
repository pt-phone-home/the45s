<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="{{ url(Request::url()) }}" />
    @yield('pageDescription')
    <meta name="keywords" content="@yield('pageKeywords')">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/de93c2514e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="/css/custom.css">

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Rock+Salt&display=swap" rel="stylesheet">

    {{-- JQUERY --}}

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>



</head>
<body class="font-display">
    @include('components.navigation')
    @yield('content')
    @include('components.footer')


    <script>
    </script>
    @yield('scripts')
</body>
</html>
