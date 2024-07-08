<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .page-link:hover {
        z-index: 2;
        color: red;
        text-decoration: none;
        background-color: #e9ecef;
        border-color: #dee2e6;
        }

        .page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: red;
    border-color: red;
}
        </style>
</head>

<body>
    <div class="container mt-4">
        @yield('header')
        <div class="row">
            @yield('main')
            @yield('sidebar')
        </div>
    </div>
</body>

</html>