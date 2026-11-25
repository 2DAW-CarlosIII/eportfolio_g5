@props(['evidencia', 'id'])

    <li class="rounded-lg bg-white p-4 shadow">

        <div class="space-y-3 sm:col-span-2">
            <p><strong>Código estudiante: </strong> {{ $evidencia['estudiante_id'] }}</p>
            <h2 class="text-2xl font-semibold">Evidencia {{ $id }}</h2>

            <p><strong>Descripción: </strong> {{ $evidencia['descripcion'] }}</p>
            <x-estado-evidencia :evidencia="$evidencia" :id="$id"/>
            <a href="{{ route('evidencias.show', ['id' => $id]) }}" class="text-blue-500 hover:underline">Ver detalle</a>
        </div>
    </li>
