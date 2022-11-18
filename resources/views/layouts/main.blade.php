<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>@yield('title', 'WAWSEWA')</title>
</head>
<body>
    @include('../components/navbar')
    @yield('content')
</body>
</html>