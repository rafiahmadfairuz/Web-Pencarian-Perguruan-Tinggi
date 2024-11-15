<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/5315505f68.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="{{ url('Member/style.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
     {{ $slot }}
     <script src="{{ url('Member/main.js') }}"></script>
</body>
</html>
