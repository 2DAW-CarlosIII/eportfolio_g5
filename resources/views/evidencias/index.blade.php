<x-layout :titulo="'Listado de evidencias'">
    <h2 class="text-2xl font-semibold">
                Listado de evidencias
    </h2>
    <ul class="grid gap-4 sm:grid-cols-2">
    @forelse ($evidencias as $id => $evidencia)
    <x-tarjeta-evidencia-listado :evidencia="$evidencia" :id="$id" />
    @empty
        <li>Todavía no hay Evidencias.</li>
    @endforelse
    </ul>
</x-layout>