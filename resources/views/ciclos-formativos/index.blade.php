<x-layout titulo="Ciclos formativos">
    <a href="{{ route('ciclos-formativos.create') }}" class="mt-4 inline-block rounded bg-slate-800 px-3 py-1.5 text-white">Dar de alta un ciclo formativo</a>
    <ul class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @forelse ($ciclosFormativos as $id => $cicloFormativo)
            <x-tarjeta-ciclo-formativo-listado :cicloFormativo="$cicloFormativo" :id="$id" />  
        @empty
            <li>Todavía no hay ciclos formativos disponibles.</li>
        @endforelse
    </ul>
</x-layout>