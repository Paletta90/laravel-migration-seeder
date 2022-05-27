<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">

    <title>Train</title>
</head>
<body>
    
    {{-- Header --}}
    <header>
        @include('includes.header')
    </header>

    {{-- main --}}
    <main>
        @yield('content')
    </main>

    <script src=" {{ asset('js/app.js') }} "></script>

</body>
</html>