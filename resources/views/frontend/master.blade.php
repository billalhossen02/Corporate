<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>NGenIt Corporate</title>
    @include('frontend.style.css')

</head>

<body>

    @yield('content')

    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/javascript.mr.js') }}"></script>

    @include('frontend.style.js')

</body>

</html>
