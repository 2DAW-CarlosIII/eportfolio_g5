<x-layout>
    <h1>Nuevo módulo formativo</h1>
    <form action="{{ route('modulos-formativos.store') }}" method="POST">
        @csrf
        <x-modulo-formativo-form
            :moduloFormativo="null"
            :default-centro="config('eportfolio.centro', '')"
            boton="Añadir módulo formativo"
        />
    </form>
</x-layout>