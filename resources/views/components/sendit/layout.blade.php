@props(['titulo' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo ? $titulo . ' · ' : '' }}{{ config('app.name') }}</title>
    <script src="//unpkg.com/alpinejs" defer=""></script>
    <link rel="icon" type="image/x-icon" href="./imgs/favico.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
  
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="inter antialiased bg-[#0d0e11]">
    <x-sendit.header />
    
    <x-sendit.main :titulo="$titulo">
        {{ $slot }}
    </x-sendit.main>

    <x-sendit.footer />

</body>

</html>
