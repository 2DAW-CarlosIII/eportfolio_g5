@props(['titulo' => null])

<x-sendit.layout :titulo="$titulo">
    @session('mensaje')
        <div class="mb-6 rounded border border-black-300 bg-green-50 p-4 text-blue-800">
            {{ $value }}
        </div>
    @endsession
    {{ $slot }}
</x-sendit.layout>