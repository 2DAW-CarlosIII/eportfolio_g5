@props(['titulo' => null])

<main>

    <section class="px-8 py-20 pb-0 bg-[#f6f7fa] rounded-t-3xl">
        <div class="mx-auto w-full max-w-5xl text-black text-center">
                {{ $slot }}
        </div>
    </section>

    <x-sendit.tarjeta-dato />

    <x-sendit.herramientas />
    
    <x-sendit.logos />

    <x-sendit.precios />

    <x-sendit.faq />
</main>
