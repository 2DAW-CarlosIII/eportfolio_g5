@php
    $logos = [
        'PHP' => 'sendit/images/php.svg',
        'Laravel' => 'sendit/images/laravel.svg',
        'Docker' => 'sendit/images/docker.svg',
    ];
@endphp

<section class="px-8 py-20 bg-[#f6f7fa] rounded-3xl">
        <div class="h-full mx-auto max-w-5xl">
            <div class="mx-auto max-w-5xl flex flex-col items-center gap-10 w-full">
                <div class="max-w-[200px] text-sm text-gray-400 text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>
                <ul class="flex flex-row gap-12 justify-center flex-wrap items-center">
                    @foreach ($logos as $nombre => $ruta)
                        <li>
                            <img class="h-16 w-auto" src="{{ asset($ruta) }}" alt="{{ $nombre }}">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
</section>
