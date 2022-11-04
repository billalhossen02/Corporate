<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>NGenIt Corporate</title>
    <link rel="icon" href="{{ asset('assets/frontend/image/Logo/logo.png') }}">
    @include('frontend.style.css')

</head>

<body class="p-0 m-0">

    @yield('content')

    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/javascript.mr.js') }}"></script>

    @include('frontend.style.js')

    <div>
        @include('frontend.client.feedback')
    </div>

</body>

</html>
