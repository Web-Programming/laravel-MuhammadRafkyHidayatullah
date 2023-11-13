<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <h1>{{ $kampus }}</h1>
    <hr>

    @yield('content')

    <hr>
    &copy; {{date('Y')}} Universitas Multi Data Palembang
</body>
</html>
