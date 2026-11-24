@props(['evidencia', 'id'])

<p @class([
            'mt-2 font-bold',
            'text-green-700' => $evidencia['estado_validacion'] === 'validada',
            'text-red-700' => $evidencia['estado_validacion'] === 'rechazada',
            'text-yellow-700' => $evidencia['estado_validacion'] === 'pendiente',
            ])      
            ><strong>Estado: </strong> {{ $evidencia['estado_validacion'] }}
</p>