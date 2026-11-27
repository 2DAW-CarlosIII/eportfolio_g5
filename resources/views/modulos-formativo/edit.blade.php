<x-layout :id="$id">
    <h1>Modificar módulo formativo {{ $id }}</h1>
    <p>{{ $moduloFormativo['nombre'] }}</p>
    <form action="{{ route('modulos-formativos.update', ['id' => $id]) }}" method="POST">
        @csrf
        @method('PUT')
        <x-modulo-formativo-form :moduloFormativo="$moduloFormativo" />
        
    </form>
    
</x-layout>