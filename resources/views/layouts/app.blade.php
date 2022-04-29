<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    @include('layouts._nav')
    @if (session("message"))
    <div class="alert alert-success" role="alert">
        {{ session("message") }}
    </div>
    @endif
    @yield('content')
    @include('layouts._footer')

<script src="{{mix('js/app.js')}}"></script>
<script src="https://cdn.lordicon.com/lusqsztk.js"></script>
</body>
</html>
