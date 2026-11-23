<x-layout :id="$id">
    <h1>Perfil</h1>
    <p>
        @if ($id)
            Perfil del usuario {{ $id }}
        @else
            Mi perfil
        @endif
    </p>
</x-layout>    