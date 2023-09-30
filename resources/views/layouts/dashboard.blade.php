<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>

    @include('layouts.nav')
    <div class=" container">
        @if (session('message'))
            <div class=" alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="row gap-5 justify-content-center">
            <div class="col-2">
                @include('layouts.sidebar')
            </div>
            <div class="col-9">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>
</body>

</html>
