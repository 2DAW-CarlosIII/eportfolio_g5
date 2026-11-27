<x-layout titulo="Familias profesionales">
    <x-sendit.boton :href="route('familias-profesionales.create')">
                    Añadir Familia Profesional
    </x-sendit.boton>
    <br>
    <br>
    <ul class="grid gap-4 sm:grid-cols-2">
    @forelse ($familiasProfesionales as $id => $familiaProfesional)
    <x-tarjeta-familia-profesional-listado :familiaProfesional="$familiaProfesional" :id="$id" />
    @empty
        <li>Todavía no hay Familias Profesionales.</li>
    @endforelse
    </ul>
</x-layout>

