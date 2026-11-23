@php
    $herramientas = [
        ['numero' => 1, 'texto' => 'Our best<br>Places', 'destacado' => false],
        ['numero' => 2, 'texto' => 'See<br>more', 'destacado' => false],
        ['numero' => 3, 'texto' => 'Lorem<br>ipsum', 'destacado' => true],
        ['numero' => 4, 'texto' => 'Best<br>tools', 'destacado' => false],
        ['numero' => 5, 'texto' => 'Lost<br>paper', 'destacado' => false],
        ['numero' => 6, 'texto' => 'Our best<br>Places', 'destacado' => false],
        ['numero' => 7, 'texto' => 'Our best<br>Places', 'destacado' => false],
        ['numero' => 8, 'texto' => 'Our best<br>Places', 'destacado' => false],
    ];
@endphp

<section class="px-8 py-20">
        <div class="flex flex-col gap-16 items-center mx-auto w-full max-w-3xl">
            <h2 class="text-5xl font-semibold tracking-tighter text-center text-white">
                And More<br>
                Tools to use
            </h2>
            <div class="flex flex-wrap justify-center gap-2 w-full">
                @foreach ($herramientas as $herramienta)
                <div class="flex w-full max-w-[100px] flex-col gap-2 p-8 rounded-xl border items-center box-content {{ $herramienta['destacado'] ? 'border-gray-700 bg-[#cff245]' : 'border-gray-200 bg-white' }}">
                    <i class="bi bi-{{ $herramienta['numero'] }}-circle-fill text-4xl"></i>
                    <span class="text-center font-bold">
                        {!! $herramienta['texto'] !!}
                    </span>
                </div>
                @endforeach
            </div>     
        </div>
</section>
