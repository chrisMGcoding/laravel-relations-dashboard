<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Document</title>
    
</head>
<body class="flex">

    <div class="bg-vertical">

    @include('partials.nav')

    </div>
    <div>
    @yield('content')
    
    </div>

    <script src="{{ asset('js/app.js') }}"></script>


</body>
</html>