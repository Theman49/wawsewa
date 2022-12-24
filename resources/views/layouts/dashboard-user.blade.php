<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="{{ asset('/images/logo.png') }}">
    @vite('resources/css/app.css')
    <title>@yield('title', 'WAWSEWA')</title>
</head>
<body>
    @include('../components/navbar')
    <div class="container flex gap-10 justify-between py-10">
        <div class="min-w-[250px]">
            @include('../components/sidebar-user')
        </div>
        <div class="border border-gray-300 rounded-lg p-8 w-full">
            @yield('content')
        </div>
    </div>
    @include('../components/footer')
</body>
</html>
