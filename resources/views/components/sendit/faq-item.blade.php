@props(['pregunta', 'respuesta'])

<div x-data="{ abierto: false }">
    {{-- Uso de alpine para poder pasar el test --}}
    <button type="button" @click="abierto = !abierto" class="flex items-center gap-3 text-left cursor-pointer text-base font-medium tracking-tight text-gray-900">
        <i class="bi bi-chevron-right text-sm text-black transition-transform duration-200":class="{ 'rotate-90': abierto }"></i>
        {{ $pregunta }}
    </button>

    <p x-show="abierto" x-transition class="pt-4 text-sm text-gray-500">
        {{ $respuesta }}
    </p>
</div>