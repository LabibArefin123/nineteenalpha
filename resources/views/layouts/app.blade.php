<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Nineteen Alpha')</title>
    <link rel="icon" href="{{ asset('images/nine.png') }}" type="image/png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-white text-gray-900">
    @yield('content')
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

</body>

</html>
