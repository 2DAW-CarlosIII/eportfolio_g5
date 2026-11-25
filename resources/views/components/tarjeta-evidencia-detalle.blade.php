@props(['evidencia', 'id'])

    <li class="rounded-lg bg-white p-4 shadow">

        <div class="space-y-3 sm:col-span-2">
            <h2 class="text-2xl font-semibold">
                Evidencia {{ $id }}
            </h2>
            
            <p><strong>Id de estudiante: </strong> {{ $evidencia['estudiante_id'] }}</p>
            <p><strong>Id de tarea: </strong> {{ $evidencia['tarea_id'] }}</p>
            <p><strong>Url: </strong> <a href="{{ $evidencia['url'] }}" target="_blank" class="text-blue-500 hover:underline">Ver evidencia</a></p>
            <p><strong>Descripción: </strong> {{ $evidencia['descripcion'] }}</p>
            <x-estado-evidencia :evidencia="$evidencia" :id="$id"/>
            <a href="{{ route('evidencias.edit', ['id' => $id]) }}" class="text-blue-500 hover:underline">Editar evidencia</a>
            <a href="{{ route('evidencias.index') }}" class="text-gray-500 hover:underline">Volver al listado</a>
        </div>
    </li>