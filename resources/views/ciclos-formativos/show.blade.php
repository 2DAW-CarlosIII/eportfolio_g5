<x-layout :titulo="'Vista detalle Ciclos Formativos' . $id">
    @isset($cicloFormativo)
        <ul class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <x-tarjeta-ciclo-formativo-detalle :cicloFormativo="$cicloFormativo" :id="$id" />
        </ul>
    @endisset
</x-layout>