<x-layout :id="$id">
    <h1>Modificar ciclo formativo {{ $id }}</h1>
    <p>{{ $cicloFormativo['nombre'] }}</p>
    <x-formulario-ciclos-formativos :ciclo-formativo="$cicloFormativo" :action="route('ciclos-formativos.update', $id)" metodo="PUT" boton="Modificar ciclo formativo" />
</x-layout>