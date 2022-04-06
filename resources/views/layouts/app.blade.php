<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between  mb-6"><ul class="flex items-center">
        <a href="" class="p-3">Home</a>
        <a href="" class="p-3">Dashboard</a>
        <a href="" class="p-3">Post</a></ul>
        <ul class="flex items-center">
        <a href="" class="p-3">Ang</a>
        <a href="" class="p-3">Login</a>
        <a href="" class="p-3">Register</a>
        <a href="" class="p-3">Logout</a></ul>
</nav>
    @yield('content')
</body>
</html>