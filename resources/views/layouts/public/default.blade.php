<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    {{-- Theme color --}}
    <meta name="theme-color" content="#305CE9" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body class="font-dm">
    <main class="flex flex-col">
        @yield('page.content')
    </main>
</body>
</html>
