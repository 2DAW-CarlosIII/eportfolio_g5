@php
    $planes = [
        [
            'titulo' => 'SendIt Monthly License',
            'precio' => '$10',
            'periodo' => '/month',
            'destacada' => false,
            'caracteristicas' => [
                'Boost your productivity with SendIt',
                'Available for Google Chrome and Chromium',
                'License for 3 devices',
                'Permanent access to the SendIt community',
            ],
        ],
        [
            'titulo' => 'SendIt Yearly License',
            'precio' => '$80',
            'periodo' => '/year',
            'destacada' => true,
            'caracteristicas' => [
                'Save 50% - 6 months free',
                'Boost your productivity with SendIt',
                'Available for Google Chrome and Chromium',
                'License for 3 devices',
                'Permanent access to the SendIt community',
                'Get all updates and new features for one year',
            ],
        ],
        [
            'titulo' => 'SendIt Perpetual License',
            'precio' => '$199',
            'periodo' => '/one-time',
            'destacada' => false,
            'caracteristicas' => [
                'Pay once, use forever',
                'Boost your productivity with SendIt',
                'Available for Google Chrome and Chromium',
                'License for 3 devices',
                'Permanent access to the SendIt community',
                'Get all updates and new features',
            ],
        ],
    ];
@endphp

<section class="px-8 py-20">
    <div class="h-full mx-auto max-w-5xl">
        <div class="mx-auto max-w-7xl px-4 lg:text-center sm:px-6 lg:px-8 pb-10">
            <div class="max-w-3xl mx-auto lg:max-w-none">
                <h2 class="text-5xl font-semibold tracking-tighter text-white text-center">
                    Level up your <span class="lg:block">development experience</span>
                </h2>
            </div>
        </div>

        <div class="items-start gap-2 mx-auto items-center mt-12 flex flex-col lg:grid lg:grid-cols-3">
            @foreach ($planes as $plan)
                <x-sendit.tarjeta-precio :titulo="$plan['titulo']" :precio="$plan['precio']"
                    :periodo="$plan['periodo']" :destacada="$plan['destacada']">

                    @foreach ($plan['caracteristicas'] as $caracteristica)
                        <li class="flex items-start gap-3">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check-filled"
                                    width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                                        stroke-width="0" fill="currentColor"></path>
                                </svg>
                            </div>
                            <p>{{ $caracteristica }}</p>
                        </li>
                    @endforeach

                    <x-slot:accion>
                        <button
                            class="flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-semibold text-gray-600 transition-all bg-white border border-gray-300 rounded-lg">
                            Get started
                        </button>
                    </x-slot:accion>
                </x-sendit.tarjeta-precio>
            @endforeach
        </div>
    </div>
</section>