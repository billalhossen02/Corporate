<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin of NGen IT</title>
    <link rel="icon" href="{{ asset('assets/frontend/image/Logo/logo.png') }}">
    @include('backend.style.css')

</head>

<body>

    @yield('content')

    @include('backend.style.js')

</body>

</html>
