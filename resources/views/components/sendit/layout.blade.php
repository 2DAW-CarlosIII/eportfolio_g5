@props(['titulo' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo ? $titulo . ' · ' : '' }}{{ config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('sendit/images/favico.png') }}">
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
        @session('mensaje')
        <div @class([
            'bg-[#cff245] inline-flex items-center justify-center gap-2 rounded-[5px] font-bold text-black transition-colors',
            'px-6 py-2.5' => ! false,
            'min-w-[12em] px-9 py-4 text-2xl' => false,
            'bg-dope-red hover:bg-dope-red-hover' => ! false,
            'bg-dope-dark hover:bg-dope-dark-hover' => false,
        ])>
            {{ $value }}
        </div>
        @endsession
        {{ $slot }}
    </x-sendit.main>

    <x-sendit.footer />

</body>

</html>
