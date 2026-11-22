@props(['titulo', 'precio', 'periodo', 'destacada' => false])

<div class="flex flex-col justify-between h-full p-8 rounded-3xl {{ $destacada ? 'bg-[#cff245] text-black' : 'bg-gray-50' }}">
    <div class="flex flex-col">
        <div>
            <h3 class="mt-4 font-medium {{ $destacada ? '' : 'text-gray-900' }}">
                {{ $titulo }}
            </h3>
        </div>
        <div class="order-first text-2xl font-medium">
            {{ $precio }} <span>{{ $periodo }}</span>
        </div>
        <p class="mt-2 text-xs italic {{ $destacada ? 'text-gray-700' : 'text-gray-600' }}">
            Excluding local taxes or VAT if applicable.
        </p>
        <ul class="flex flex-col gap-2 mt-12 text-sm {{ $destacada ? '' : 'text-gray-600' }}">
            {{ $slot }}
        </ul>
    </div>

    @isset($accion)
        <div class="mt-8">
            {{ $accion }}
        </div>
    @endisset
</div>